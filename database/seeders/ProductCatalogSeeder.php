<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * Base seeder for adding a photo collection of products to one product category.
 *
 * A child seeder defines the category slug, the image folder (inside database/seeders/)
 * and the product list. Running it:
 *  - creates missing sub categories (Men's / Woman's / Kids …) under that category
 *  - copies each image to public/medies/<Mon-YYYY>/ and registers it as main + gallery image
 *  - links the product to the category and its sub category
 *  - skips products whose slug already exists, so it is safe to run again
 */
abstract class ProductCatalogSeeder extends Seeder
{
    /** slug of the parent product category, e.g. "knit-wear" */
    abstract protected function categorySlug(): string;

    /** folder with the images, relative to database/seeders/ */
    abstract protected function imageDir(): string;

    /** list of products: image, sub, name, intro, features[, sku, specs] */
    abstract protected function products(): array;

    public function run(): void
    {
        $category = DB::table('attributes')->where('type', 0)->where('slug', $this->categorySlug())->first();
        if (!$category) {
            $this->command->error('Product category "' . $this->categorySlug() . '" not found.');
            return;
        }

        $subIds = $this->subCategories($category, collect($this->products())->pluck('sub')->filter()->unique());

        $now    = Carbon::now();
        $folder = 'medies/' . $now->format('M-Y');
        File::ensureDirectoryExists(public_path($folder));

        $added = 0;
        foreach ($this->products() as $i => $p) {
            $slug = Str::slug($p['name']);
            if (DB::table('posts')->where('type', 2)->where('slug', $slug)->exists()) {
                $this->command->line("  skip  {$p['name']} (already exists)");
                continue;
            }

            $source = database_path('seeders/' . $this->imageDir() . '/' . $p['image']);
            if (!File::exists($source)) {
                $this->command->warn("  missing image {$p['image']} – skipped");
                continue;
            }

            DB::transaction(function () use ($p, $slug, $source, $folder, $now, $category, $subIds, $i) {
                $createdAt = $now->copy()->subMinutes($i); // keeps the listed order on "newest first"

                $postId = DB::table('posts')->insertGetId([
                    'name'               => $p['name'],
                    'slug'               => $slug,
                    'short_description'  => $this->description($p),
                    'sku_code'           => $p['sku'] ?? null,
                    'search_key'         => $p['name'] . ' ' . $category->name . ' ' . ($p['sub'] ?? ''),
                    'seo_title'          => $p['name'] . ' | Nuvesta Global LLC',
                    'seo_description'    => Str::limit($p['intro'], 155),
                    'stock_status'       => 1,
                    'final_stock_status' => 1,
                    'min_order_quantity' => 1,
                    'type'               => 2,
                    'status'             => 'active',
                    'new_arrival'        => 1,
                    'fetured'            => 0,
                    'up_coming'          => 0,
                    'addedby_id'         => 1,
                    'created_at'         => $createdAt,
                    'updated_at'         => $createdAt,
                ]);

                // image -> media library (main image + gallery image)
                $fileName = time() . '.' . uniqid() . '.' . pathinfo($source, PATHINFO_EXTENSION);
                File::copy($source, public_path($folder . '/' . $fileName));
                foreach ([1, 3] as $use) {
                    DB::table('media')->insert([
                        'src_id'      => $postId,
                        'src_type'    => 1,
                        'use_Of_file' => $use,
                        'file_name'   => $p['image'],
                        'file_rename' => $fileName,
                        'alt_text'    => $p['name'],
                        'file_url'    => $folder . '/' . $fileName,
                        'file_size'   => File::size($source),
                        'file_type'   => 1,
                        'file_path'   => $folder,
                        'mine_type'   => File::mimeType($source),
                        'addedby_id'  => 1,
                        'created_at'  => $createdAt,
                        'updated_at'  => $createdAt,
                    ]);
                }

                // category + sub category
                $ctgs = array_values(array_filter([$category->id, $subIds[$p['sub'] ?? ''] ?? null]));
                foreach ($ctgs as $drag => $ctgId) {
                    DB::table('post_attributes')->insert([
                        'src_id'        => $postId,
                        'reff_id'       => $ctgId,
                        'type'          => 0,
                        'discount_type' => 'percent',
                        'stock_status'  => 1,
                        'drag'          => $drag,
                        'created_at'    => $createdAt,
                        'updated_at'    => $createdAt,
                    ]);
                }
            });

            $added++;
            $this->command->info("  added {$p['name']}");
        }

        $this->command->info("Done – {$added} product(s) added to {$category->name}.");
    }

    /** returns [sub category name => id], creating the ones that don't exist yet */
    private function subCategories(object $category, $names): array
    {
        $existing = DB::table('attributes')->where('type', 0)->where('parent_id', $category->id)
            ->where('status', '<>', 'temp')->pluck('id', 'name')->all();

        foreach ($names as $name) {
            if (isset($existing[$name])) {
                continue;
            }
            $slug = Str::slug($name . ' ' . $category->name);
            if (DB::table('attributes')->where('type', 0)->where('slug', $slug)->exists()) {
                $slug .= '-' . $category->id;
            }
            $existing[$name] = DB::table('attributes')->insertGetId([
                'name'       => $name,
                'slug'       => $slug,
                'parent_id'  => $category->id,
                'type'       => 0,
                'status'     => 'active',
                'addedby_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $this->command->info("  created sub category {$category->name} › {$name}");
        }

        return $existing;
    }

    private function description(array $p): string
    {
        $html = '<p>' . e($p['intro']) . '</p>';

        if (!empty($p['specs'])) {
            $html .= '<p><strong>Specification:</strong></p><ul>';
            foreach ($p['specs'] as $label => $value) {
                $html .= '<li><strong>' . e($label) . ':</strong> ' . e($value) . '</li>';
            }
            $html .= '</ul>';
        }

        $html .= '<p><strong>Key Features:</strong></p><ul>';
        foreach ($p['features'] as $f) {
            $html .= '<li>' . e($f) . '</li>';
        }
        $html .= '</ul>';

        return $html;
    }
}

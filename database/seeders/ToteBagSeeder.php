<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/**
 * Canvas tote bag collection → "Accessories" main product category
 * (creates the top-level Accessories category if missing).
 *
 *   php artisan db:seed --class=ToteBagSeeder
 */
class ToteBagSeeder extends ProductCatalogSeeder
{
    protected function categorySlug(): string
    {
        return 'accessories';
    }

    protected function imageDir(): string
    {
        return 'tote-bags';
    }

    public function run(): void
    {
        if (!DB::table('attributes')->where('type', 0)->where('slug', 'accessories')->exists()) {
            DB::table('attributes')->insert([
                'name'        => 'Accessories',
                'slug'        => 'accessories',
                'parent_id'   => null,
                'type'        => 0,
                'status'      => 'active',
                'fetured'     => 1,
                'addedby_id'  => 1,
                'editedby_id' => 1,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
            $this->command->info('  created main category Accessories');
        }

        parent::run();
    }

    protected function products(): array
    {
        return [
            [
                'image' => 'tote-01.webp',
                'name'  => 'Heavy Canvas Shopper Tote Bag - Burgundy',
                'intro' => 'Roomy heavyweight canvas shopper tote with long shoulder straps and a structured gusseted base.',
                'features' => ['Heavyweight cotton canvas', 'Long shoulder-length straps', 'Reinforced stitched handle joins', 'Gusseted base for extra capacity', 'Open top for easy access'],
            ],
            [
                'image' => 'tote-02.webp',
                'name'  => 'Heavy Canvas Shopper Tote Bag - Navy',
                'intro' => 'Durable everyday canvas shopper tote in navy with long shoulder straps and a wide gusseted base.',
                'features' => ['Heavyweight cotton canvas', 'Long shoulder-length straps', 'Reinforced stitched handle joins', 'Gusseted base for extra capacity', 'Open top for easy access'],
            ],
            [
                'image' => 'tote-03.webp',
                'name'  => 'Classic Canvas Tote Bag - Natural/Navy/Green/Red',
                'intro' => 'Compact canvas tote with sturdy short handles, available in natural, navy, green and red.',
                'features' => ['Durable cotton canvas', 'Short top handles', 'Box-stitched handle reinforcement', 'Folded base gusset', 'Available in four colours'],
            ],
            [
                'image' => 'tote-04.webp',
                'name'  => 'Oversized Canvas Tote Bag with Front Pocket - Black',
                'intro' => 'Oversized heavy canvas tote with a front patch pocket and full-wrap straps for carrying heavier loads.',
                'features' => ['Heavyweight cotton canvas', 'Front patch pocket', 'Full-wrap reinforced straps', 'Reinforced base panel', 'Oversized carry-all capacity'],
            ],
            [
                'image' => 'tote-05.webp',
                'name'  => 'Oversized Canvas Tote Bag - Natural/Navy/Green',
                'intro' => 'Wide oversized canvas tote with sturdy shoulder handles – a simple, spacious everyday carry-all in natural, navy and green.',
                'features' => ['Heavyweight cotton canvas', 'Shoulder-length handles', 'Box-stitched handle reinforcement', 'Wide, roomy body', 'Available in natural, navy and green'],
            ],
        ];
    }
}

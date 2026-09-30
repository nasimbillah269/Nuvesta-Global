<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/**
 * Women's tops collection → "Womenswear › Womens Tops" product category
 * (creates the top-level Womenswear category and its Womens Tops sub category if missing).
 *
 *   php artisan db:seed --class=WomensTopsSeeder
 */
class WomensTopsSeeder extends ProductCatalogSeeder
{
    protected function categorySlug(): string
    {
        return 'womenswear';
    }

    protected function imageDir(): string
    {
        return 'womens-tops';
    }

    public function run(): void
    {
        $womenswear = DB::table('attributes')->where('type', 0)->where('slug', 'womenswear')->first();
        if (!$womenswear) {
            $womenswear = (object) ['id' => $this->createCategory('Womenswear', 'womenswear', null)];
            $this->command->info('  created main category Womenswear');
        }

        // create "Womens Tops" with a clean slug so the base seeder reuses it
        if (!DB::table('attributes')->where('type', 0)->where('parent_id', $womenswear->id)->where('name', 'Womens Tops')->exists()) {
            $this->createCategory('Womens Tops', 'womens-tops', $womenswear->id);
            $this->command->info('  created sub category Womenswear › Womens Tops');
        }

        parent::run();
    }

    private function createCategory(string $name, string $slug, ?int $parentId): int
    {
        return DB::table('attributes')->insertGetId([
            'name'        => $name,
            'slug'        => $slug,
            'parent_id'   => $parentId,
            'type'        => 0,
            'status'      => 'active',
            'fetured'     => 1,
            'addedby_id'  => 1,
            'editedby_id' => 1,
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);
    }

    protected function products(): array
    {
        return [
            // ---------- blouses & shirts ----------
            [
                'image' => 'womens-top-01.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Split-Neck Linen Blend Top - White",
                'intro' => 'Relaxed short-sleeve top in a breathable linen blend with a notched split neckline and stitched placket detail.',
                'features' => ['Breathable linen-blend fabric', 'Notched split neckline', 'Stitched placket detail', 'Short sleeves', 'Relaxed boxy fit'],
            ],
            [
                'image' => 'womens-top-02.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Rolled-Sleeve Crew Neck T-Shirt - White",
                'intro' => 'Easy everyday crew neck tee with a relaxed drop-shoulder fit and rolled sleeve cuffs.',
                'features' => ['Soft cotton jersey', 'Rib crew neckline', 'Drop shoulders', 'Rolled sleeve cuffs', 'Relaxed fit'],
            ],
            [
                'image' => 'womens-top-03.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Long-Sleeve Button-Up Blouse - White",
                'intro' => 'Soft, fluid long-sleeve blouse with a classic collar, shoulder gathers and elasticated cuffs.',
                'features' => ['Lightweight fluid woven fabric', 'Classic point collar', 'Full button front', 'Gathered shoulder yoke', 'Elasticated cuffs'],
            ],
            [
                'image' => 'womens-top-04.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Floral Print Smocked-Neck Blouse - Red/Blue",
                'intro' => 'Feminine floral print blouse with a smocked ruffle neck, pintuck front and smocked 3/4 sleeves.',
                'features' => ['Printed cotton voile', 'Smocked ruffle neckline', 'Pintuck front detail', 'Smocked 3/4 sleeve cuffs', 'Regular fit'],
            ],
            [
                'image' => 'womens-top-05.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Gathered-Neck Button-Front Top - Off White",
                'intro' => 'Airy short-sleeve cotton top with a gathered round neck, raglan sleeves and button front.',
                'features' => ['Lightweight cotton fabric', 'Gathered round neckline', 'Button front', 'Raglan short sleeves', 'Relaxed swing fit'],
            ],
            [
                'image' => 'womens-top-06.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Tile Print V-Neck Blouse - Orange/Lilac",
                'intro' => 'V-neck blouse in a tile print with fabric-covered buttons and gathered puff 3/4 sleeves.',
                'features' => ['Printed woven fabric', 'V-neckline', 'Fabric-covered button front', 'Puff 3/4 sleeves with elastic cuffs', 'Shoulder pleats'],
            ],
            [
                'image' => 'womens-top-24.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Poplin Shirt with Smocked Cuffs - White",
                'intro' => 'Crisp cotton poplin shirt with a concealed placket, high-low hem and statement smocked cuffs.',
                'features' => ['Crisp cotton poplin', 'Classic collar', 'Concealed button placket', 'Smocked cuffs', 'High-low hem'],
            ],

            // ---------- tanks, camis & fitted tops ----------
            [
                'image' => 'womens-top-07.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Rib Knit Tank Top - White",
                'intro' => 'Essential slim-fit rib knit tank with a scoop neck – perfect on its own or for layering.',
                'features' => ['Stretch rib knit cotton', 'Scoop neckline', 'Wide shoulder straps', 'Slim fit', 'Longline length'],
            ],
            [
                'image' => 'womens-top-08.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Scoop Neck Cami Top - White",
                'intro' => 'Soft stretch cotton cami with thin straps and a scoop neckline – a versatile layering basic.',
                'features' => ['Stretch cotton jersey', 'Scoop neckline', 'Thin spaghetti straps', 'Slim fit', 'Layering essential'],
            ],
            [
                'image' => 'womens-top-09.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Sleeveless Peplum Top - Black",
                'intro' => 'Structured sleeveless top with a round neck and flared peplum hem for a smart, flattering shape.',
                'features' => ['Structured stretch fabric', 'Round neckline', 'Sleeveless', 'Fitted bodice', 'Flared peplum hem'],
            ],
            [
                'image' => 'womens-top-11.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Racer Rib Tank Top - Charcoal",
                'intro' => 'Fitted racer-cut rib tank with a high round neck in a washed charcoal shade.',
                'features' => ['Stretch rib knit fabric', 'High round neckline', 'Racer-cut armholes', 'Slim fit', 'Washed finish'],
            ],
            [
                'image' => 'womens-top-12.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Short-Sleeve Peplum Top - White",
                'intro' => 'Fitted jersey top with princess seams, cap sleeves and a soft flared peplum hem.',
                'features' => ['Soft stretch jersey', 'Round neckline', 'Cap sleeves', 'Princess seam shaping', 'Flared peplum hem'],
            ],

            // ---------- wrap tops ----------
            [
                'image' => 'womens-top-10.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Long-Sleeve Wrap Top - White",
                'intro' => 'Fitted long-sleeve jersey top with a crossover wrap front and side ruching.',
                'features' => ['Stretch cotton jersey', 'Crossover V-neck', 'Side ruching detail', 'Long sleeves', 'Slim fit'],
            ],
            [
                'image' => 'womens-top-13.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Long-Sleeve Wrap Top - Burgundy",
                'intro' => 'Flattering crossover wrap top in soft stretch jersey with gentle side ruching.',
                'features' => ['Soft stretch jersey', 'Crossover V-neck', 'Side ruching detail', 'Long sleeves', 'Slim fit'],
            ],
            [
                'image' => 'womens-top-14.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Tie-Side Wrap Top - Black",
                'intro' => 'True wrap top with a deep V-neck and self-tie side fastening in a soft stretch fabric.',
                'features' => ['Soft stretch fabric', 'Deep V wrap neckline', 'Self-tie side fastening', 'Long sleeves', 'Asymmetric hem'],
            ],

            // ---------- pyjama sets ----------
            [
                'image' => 'womens-top-15.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Tropical Print Cotton Pyjama Set - Pink/Green",
                'intro' => 'Classic two-piece cotton pyjama set in a playful tropical palm print.',
                'features' => ['Soft cotton fabric', 'Revere collar shirt', 'Button front', 'Elasticated waist trousers', 'All-over tropical print'],
            ],
            [
                'image' => 'womens-top-16.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Toile Print Piped Pyjama Set - Blue/White",
                'intro' => 'Elegant toile print pyjama set with contrast navy piping and a chest pocket.',
                'features' => ['Soft cotton fabric', 'Notch collar shirt', 'Contrast piping', 'Chest pocket', 'Elasticated waist trousers'],
            ],
            [
                'image' => 'womens-top-17.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Satin Piped Pyjama Set - Ivory",
                'intro' => 'Luxurious satin pyjama set with black contrast piping and a relaxed cropped trouser.',
                'features' => ['Smooth satin fabric', 'Notch collar shirt', 'Contrast black piping', 'Chest pocket', 'Elasticated waist trousers'],
            ],
            [
                'image' => 'womens-top-18.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Jersey Piped Pyjama Set - Forest Green",
                'intro' => 'Soft jersey pyjama set in forest green with white contrast piping.',
                'features' => ['Soft cotton jersey', 'Notch collar shirt', 'Contrast white piping', 'Chest pocket', 'Elasticated waist trousers'],
            ],
            [
                'image' => 'womens-top-19.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Floral Print Pyjama Set - Pink",
                'intro' => 'Cosy floral print pyjama set with contrast piping and a relaxed long trouser.',
                'features' => ['Soft jersey fabric', 'Revere collar shirt', 'Contrast piping', 'Button front', 'Elasticated waist trousers'],
            ],
            [
                'image' => 'womens-top-20.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Cotton Poplin Piped Pyjama Set - White/Navy",
                'intro' => 'Crisp cotton poplin pyjama set with navy contrast piping – a timeless sleepwear classic.',
                'features' => ['Crisp cotton poplin', 'Notch collar shirt', 'Contrast navy piping', 'Chest pocket', 'Elasticated waist trousers'],
            ],

            // ---------- skirts ----------
            [
                'image' => 'womens-top-21.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Elastic Waist Maxi Skirt - Blush Pink",
                'intro' => 'Flowing A-line maxi skirt with a comfortable smocked elastic waistband.',
                'features' => ['Lightweight woven fabric', 'Smocked elastic waistband', 'A-line silhouette', 'Maxi length', 'Easy pull-on style'],
            ],
            [
                'image' => 'womens-top-22.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Drawstring Utility Midi Skirt - Beige",
                'intro' => 'Relaxed cotton midi skirt with a drawstring waist, patch pockets and side splits.',
                'features' => ['Washed cotton twill', 'Elastic drawstring waist', 'Front patch pockets', 'Side splits', 'Midi length'],
            ],
            [
                'image' => 'womens-top-23.webp', 'sub' => 'Womens Tops',
                'name'  => "Women's Pleated Midi Skirt - Black",
                'intro' => 'Elegant knife-pleated midi skirt with a fitted waistband and fluid drape.',
                'features' => ['Fluid woven fabric', 'Knife pleats', 'Fitted waistband', 'Concealed side zip', 'Midi length'],
            ],
        ];
    }
}

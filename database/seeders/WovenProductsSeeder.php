<?php

namespace Database\Seeders;

/**
 * Nuvesta tops collection (tees, polos, sweatshirts, shirts) → "Woven" product category.
 *
 *   php artisan db:seed --class=WovenProductsSeeder
 */
class WovenProductsSeeder extends ProductCatalogSeeder
{
    protected function categorySlug(): string
    {
        return 'woven';
    }

    protected function imageDir(): string
    {
        return 'woven-products';
    }

    protected function products(): array
    {
        return [
            [
                'image' => 'woven-01.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Multi-Stripe Crew Neck Tee – Navy/Rust',
                'intro' => 'Retro multi-stripe crew neck tee in navy, rust, mustard and stone – an easy, colourful everyday essential.',
                'features' => ['Yarn-dyed multi-colour stripes', 'Ribbed crew neck', 'Short sleeves', 'Regular fit'],
            ],
            [
                'image' => 'woven-02.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Flock Print Graphic Tee – Ecru',
                'sku'   => 'JPRBLUGAVIN SS TEE',
                'intro' => 'Short sleeve tee with a vintage-style collegiate flock print on the chest.',
                'specs' => ['Style name' => 'JPRBLUGAVIN SS TEE', 'Fabric quality' => '100% Cotton, single jersey, 180 GSM', 'Print / Embroidery' => 'Flock print'],
                'features' => ['Raised flock print artwork', 'Crew neck', 'Short sleeves', 'Soft cotton handfeel'],
            ],
            [
                'image' => 'woven-03.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Graphic Print Tank Top – Lemon',
                'intro' => 'Lightweight sleeveless tank with a large square graphic print on the chest – ideal for summer and gym wear.',
                'features' => ['Large front graphic print', 'Sleeveless racer-style armholes', 'Lightweight jersey', 'Regular fit'],
            ],
            [
                'image' => 'woven-04.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Slub Henley Tee – Mint',
                'intro' => 'Short sleeve henley in textured slub jersey with a two-button placket and grandad collar.',
                'features' => ['Slub textured fabric', 'Two-button placket', 'Band (grandad) collar', 'Sleeve woven tab'],
            ],
            [
                'image' => 'woven-05.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Textured Quarter-Zip Pullover – Sage',
                'intro' => 'Textured-knit quarter-zip pullover with a funnel neck and an embroidered chest badge.',
                'features' => ['Textured waffle-style fabric', 'Quarter zip with funnel neck', 'Embroidered chest badge', 'Ribbed cuffs and hem'],
            ],
            [
                'image' => 'woven-06.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Tipped V-Neck Long Sleeve Top – Ecru',
                'intro' => 'Classic long sleeve V-neck top with contrast tipped rib at the neckline and cuffs.',
                'features' => ['Contrast tipped V-neck', 'Tipped rib cuffs', 'Long sleeves', 'Relaxed fit'],
            ],
            [
                'image' => 'woven-07.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Contrast Piping Tank Top – White',
                'intro' => 'Clean white tank top finished with fine contrast piping around the neck and armholes.',
                'features' => ['Contrast piping trims', 'Scoop neckline', 'Sleeveless athletic cut', 'Soft breathable fabric'],
            ],
            [
                'image' => 'woven-08.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Yarn-Dyed Stripe Pocket Tee – Lilac',
                'sku'   => '25DN731',
                'intro' => 'Stretch yarn-dyed stripe tee with a chest pocket and 3D rubber print detail.',
                'specs' => ['Style name' => '25DN731', 'Fabric quality' => '60% Cotton, 35% Modal, 5% Elastane, Y/D single jersey, 200 GSM', 'Print / Embroidery' => '3D rubber print', 'Wash' => 'N/A'],
                'features' => ['Yarn-dyed stripes', 'Chest pocket', 'Soft stretch modal blend', 'Crew neck'],
            ],
            [
                'image' => 'woven-09.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Melange Pocket Tee – Grey',
                'intro' => 'Everyday grey melange tee with a chest pocket and small woven badge.',
                'features' => ['Grey melange fabric', 'Chest patch pocket', 'Woven badge detail', 'Crew neck'],
            ],
            [
                'image' => 'woven-10.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Graphic Print Crew Sweatshirt – Navy',
                'intro' => 'Navy crew neck sweatshirt with a colourful illustrated chest print.',
                'features' => ['Front graphic print', 'Crew neck', 'Ribbed cuffs and hem', 'Brushed inside for comfort'],
            ],
            [
                'image' => 'woven-11.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Classic Piqué Polo – Charcoal',
                'intro' => 'Timeless short sleeve polo shirt with a three-button placket and ribbed collar.',
                'features' => ['Classic polo collar', 'Three-button placket', 'Ribbed sleeve bands', 'Regular fit'],
            ],
            [
                'image' => 'woven-12.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Washed Crew Sweatshirt – Navy',
                'intro' => 'Garment-washed crew sweatshirt with an embroidered chest artwork and pocket detail.',
                'features' => ['Garment-washed finish', 'Chest embroidery artwork', 'Pocket detail', 'Ribbed cuffs and hem'],
            ],
            [
                'image' => 'woven-13.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta 1990 Satin Stitch Embroidered Tee – Ecru',
                'sku'   => 'JPRBLUDOUGLAS SS TEE',
                'intro' => 'Premium short sleeve tee with tonal “1990” satin-stitch embroidery across the chest.',
                'specs' => ['Style name' => 'JPRBLUDOUGLAS SS TEE', 'Fabric quality' => '100% BCI Cotton, single jersey, 200 GSM', 'Print / Embroidery' => 'Satin stitch embroidery'],
                'features' => ['Tonal satin-stitch embroidery', 'Sustainable BCI cotton', 'Crew neck', 'Regular fit'],
            ],
            [
                'image' => 'woven-14.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Abstract Camo Print Tee – Charcoal',
                'intro' => 'All-over abstract camo print tee with a small chest logo print.',
                'features' => ['All-over camo print', 'Chest print detail', 'Crew neck', 'Short sleeves'],
            ],
            [
                'image' => 'woven-15.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Yosemite Graphic Sweatshirt – Navy',
                'intro' => 'Crew neck sweatshirt with a national-park mountain and forest artwork on the front.',
                'features' => ['Large front landscape print', 'Crew neck', 'Ribbed cuffs and hem', 'Soft brushed back'],
            ],
            [
                'image' => 'woven-16.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Uniform Polo with Epaulettes – Navy',
                'intro' => 'Workwear / uniform polo with shoulder epaulettes, ID loop and embroidered badges on chest and sleeves.',
                'features' => ['Shoulder epaulettes', 'Embroidered chest and sleeve badges', 'Hook & loop ID panel', 'Durable textured fabric'],
            ],
            [
                'image' => 'woven-17.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Striped Long Sleeve Henley – Plum',
                'intro' => 'Fine-stripe long sleeve henley with a contrast collar, button placket and chest pocket.',
                'features' => ['Fine yarn-dyed stripes', 'Contrast band collar', 'Button placket', 'Chest pocket'],
            ],
            [
                'image' => 'woven-18.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Textured Crew Neck Tee – Off White',
                'intro' => 'Minimal crew neck tee in a subtle textured fabric with a relaxed fit.',
                'features' => ['Textured waffle-look fabric', 'Crew neck', 'Dropped shoulders', 'Relaxed fit'],
            ],
            [
                'image' => 'woven-19.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Jersey Polo Shirt – Steel Blue',
                'intro' => 'Smooth jersey polo shirt with a soft collar and neat ribbed sleeve bands.',
                'features' => ['Soft jersey fabric', 'Polo collar', 'Ribbed sleeve bands', 'Slim regular fit'],
            ],
            [
                'image' => 'woven-20.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Mock Neck Rib Pocket Tee – Black',
                'intro' => 'Heavyweight mock neck tee with a ribbed chest pocket and snap detail.',
                'features' => ['Mock neck', 'Ribbed chest pocket with snap', 'Boxy relaxed fit', 'Heavyweight cotton'],
            ],
            [
                'image' => 'woven-21.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Camp Collar Jacquard Shirt – Light Grey',
                'intro' => 'Short sleeve camp-collar shirt in a tonal jacquard pattern – relaxed resort style.',
                'features' => ['Camp (revere) collar', 'Tonal jacquard pattern', 'Full button front', 'Short sleeves'],
            ],
        ];
    }
}

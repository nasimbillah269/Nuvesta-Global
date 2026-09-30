<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/**
 * Men's outerwear collection → "Outerwear" main product category
 * (creates the top-level Outerwear category if missing).
 *
 *   php artisan db:seed --class=MenswearOuterwearSeeder
 */
class MenswearOuterwearSeeder extends ProductCatalogSeeder
{
    protected function categorySlug(): string
    {
        return 'outerwear';
    }

    protected function imageDir(): string
    {
        return 'menswear-outerwear';
    }

    public function run(): void
    {
        if (!DB::table('attributes')->where('type', 0)->where('slug', 'outerwear')->exists()) {
            DB::table('attributes')->insert([
                'name'        => 'Outerwear',
                'slug'        => 'outerwear',
                'parent_id'   => null,
                'type'        => 0,
                'status'      => 'active',
                'fetured'     => 1,
                'addedby_id'  => 1,
                'editedby_id' => 1,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
            $this->command->info('  created main category Outerwear');
        }

        parent::run();
    }

    protected function products(): array
    {
        return [
            // ---------- flannel shirt jackets ----------
            [
                'image' => 'outerwear-01.webp',
                'name'  => "Men's Sherpa-Lined Hooded Flannel Shirt Jacket - Navy Plaid",
                'intro' => 'Warm plaid flannel shirt jacket with a soft sherpa lining, fleece-lined hood and snap-button front.',
                'features' => ['Brushed cotton flannel shell', 'Sherpa-lined body', 'Fleece-lined drawcord hood', 'Snap-button front', 'Two flap chest pockets'],
            ],
            [
                'image' => 'outerwear-02.webp',
                'name'  => "Men's Zip-Front Hooded Flannel Jacket - Navy/White Plaid",
                'intro' => 'Quilt-lined plaid flannel jacket with a full zip front and a contrast grey jersey hood.',
                'features' => ['Plaid cotton flannel shell', 'Quilted warm lining', 'Contrast jersey hood', 'Full-length front zip', 'Two flap chest pockets'],
            ],
            [
                'image' => 'outerwear-03.webp',
                'name'  => "Men's Hooded Flannel Shirt Jacket - Red/Black Plaid",
                'intro' => 'Classic buffalo-style plaid shirt jacket with an attached hood and a warm lined body.',
                'features' => ['Red and black plaid flannel', 'Attached self-fabric hood', 'Warm padded lining', 'Button cuffs', 'Relaxed regular fit'],
            ],
            [
                'image' => 'outerwear-04.webp',
                'name'  => "Men's Hooded Flannel Shirt Jacket - Blue Plaid",
                'intro' => 'Blue plaid flannel shirt jacket with a contrast black jersey hood and a lined body for cooler days.',
                'features' => ['Blue plaid cotton flannel', 'Contrast black jersey hood', 'Warm lined body', 'Back yoke detail', 'Snap-button cuffs'],
            ],

            // ---------- puffer & padded jackets ----------
            [
                'image' => 'outerwear-05.webp',
                'name'  => "Men's Hooded Padded Puffer Jacket - Olive",
                'intro' => 'Clean, matte hooded puffer with wide baffle quilting and a snap-button storm placket.',
                'features' => ['Matte water-repellent shell', 'Wide-baffle padded construction', 'Fixed insulated hood', 'Snap storm placket over zip', 'Side welt pockets'],
            ],
            [
                'image' => 'outerwear-06.webp',
                'name'  => "Men's Classic Bomber Jacket - Black",
                'intro' => 'Timeless bomber jacket with rib-knit collar, cuffs and hem – an easy everyday layer.',
                'features' => ['Smooth nylon-look shell', 'Rib-knit collar, cuffs and hem', 'Full-length front zip', 'Side entry pockets', 'Regular fit'],
            ],
            [
                'image' => 'outerwear-07.webp',
                'name'  => "Men's Hooded Puffer Jacket - Navy",
                'intro' => 'Warm hooded puffer jacket with horizontal baffle quilting and zipped hand pockets.',
                'features' => ['Water-repellent shell', 'Padded baffle quilting', 'Fixed padded hood', 'Zipped hand pockets', 'Elasticated cuffs'],
            ],

            // ---------- shells & softshells ----------
            [
                'image' => 'outerwear-08.webp',
                'name'  => "Men's Waterproof Hooded Rain Jacket - Black",
                'intro' => 'Lightweight hooded rain jacket with a storm-flap zip and adjustable cuffs for wet-weather days.',
                'features' => ['Waterproof, breathable shell', 'Adjustable hood', 'Storm flap over front zip', 'Zipped hand pockets', 'Hook-and-loop adjustable cuffs'],
            ],
            [
                'image' => 'outerwear-09.webp',
                'name'  => "Men's Hooded Softshell Jacket - Olive",
                'intro' => 'Stretch softshell jacket with an adjustable hood, chest zip pocket and contrast black zips.',
                'features' => ['Stretch softshell fabric', 'Adjustable hood', 'Chest zip pocket', 'Zipped hand pockets', 'Contrast black zips'],
            ],

            // ---------- parkas & utility jackets ----------
            [
                'image' => 'outerwear-10.webp',
                'name'  => "Men's Four-Pocket Hooded Field Parka - Olive",
                'intro' => 'Utility field parka with four flap pockets, a padded hood and a zipped sleeve-side pocket.',
                'features' => ['Water-repellent twill shell', 'Padded hood', 'Four flap cargo pockets', 'Zip with snap storm placket', 'Padded for warmth'],
            ],
            [
                'image' => 'outerwear-11.webp',
                'name'  => "Men's Faux-Fur Hood Parka - Navy",
                'intro' => 'Smart winter parka with a faux-fur trimmed hood, large flap pockets and adjustable cuffs.',
                'features' => ['Faux-fur trimmed hood', 'Two-way zip with snap placket', 'Large flap hand pockets', 'Upper welt pockets', 'Adjustable tab cuffs'],
            ],
            [
                'image' => 'outerwear-12.webp',
                'name'  => "Men's Faux-Fur Hood Parka - Black",
                'intro' => 'Longline winter parka with a fleece-lined, faux-fur trimmed hood and zipped chest pockets.',
                'features' => ['Faux-fur trimmed hood', 'Fleece-lined collar', 'Zipped chest pockets', 'Large flap lower pockets', 'Adjustable tab cuffs'],
            ],
            [
                'image' => 'outerwear-13.webp',
                'name'  => "Men's Utility Faux-Fur Hood Parka - Navy",
                'intro' => 'Heavy-duty utility parka with a faux-fur hood, quilted lining, D-ring detail and multiple pockets.',
                'features' => ['Faux-fur trimmed hood', 'Quilted inner lining', 'Snap-flap chest pockets', 'Large lower patch pockets', 'D-ring utility detail'],
            ],
            [
                'image' => 'outerwear-14.webp',
                'name'  => "Men's Hooded Utility Jacket - Dark Olive",
                'intro' => 'Hooded utility jacket with a vertical chest zip pocket, large bellow pockets and drawcord hood.',
                'features' => ['Water-repellent shell', 'Drawcord hood', 'Vertical chest zip pocket', 'Large lower flap pockets', 'Hook-and-loop cuffs'],
            ],

            // ---------- sherpa & canvas jackets ----------
            [
                'image' => 'outerwear-15.webp',
                'name'  => "Men's Sherpa-Collar Trucker Jacket - Khaki",
                'intro' => 'Classic trucker-style jacket in washed cotton with a soft sherpa collar and full sherpa lining.',
                'features' => ['Washed cotton twill shell', 'Sherpa collar and lining', 'Button front', 'Two flap chest pockets', 'Side hand pockets'],
            ],
            [
                'image' => 'outerwear-16.webp',
                'name'  => "Men's Sherpa-Lined Hooded Canvas Jacket - Brown",
                'intro' => 'Rugged cotton canvas work jacket with a sherpa-lined hood and snap-button front.',
                'features' => ['Heavyweight cotton canvas', 'Sherpa-lined drawcord hood', 'Snap-button front', 'Two flap chest pockets', 'Side hand pockets'],
            ],
            [
                'image' => 'outerwear-17.webp',
                'name'  => "Men's Sherpa-Lined Hooded Canvas Jacket - Khaki",
                'intro' => 'Warm canvas jacket with a full sherpa lining, attached hood and zip with snap storm placket.',
                'features' => ['Cotton canvas shell', 'Full sherpa lining', 'Attached hood', 'Zip with snap storm placket', 'Two flap chest pockets'],
            ],

            // ---------- windbreakers ----------
            [
                'image' => 'outerwear-18.webp',
                'name'  => "Men's Hooded Windbreaker - Black",
                'intro' => 'Lightweight hooded windbreaker with drawcord hood and elastic cuffs – easy to layer and carry.',
                'features' => ['Lightweight wind-resistant shell', 'Drawcord hood', 'Full-length front zip', 'Side entry pockets', 'Elastic cuffs'],
            ],
            [
                'image' => 'outerwear-19.webp',
                'name'  => "Men's Hooded Windbreaker - Olive",
                'intro' => 'Hooded windbreaker with a contrast black-lined hood, chest zip pocket and sleeve badge detail.',
                'features' => ['Water-repellent shell', 'Contrast lined hood', 'Chest zip pocket', 'Zipped hand pockets', 'Elastic cuffs'],
            ],
            [
                'image' => 'outerwear-20.webp',
                'name'  => "Men's Hooded Windbreaker - Royal Blue",
                'intro' => 'Casual hooded windbreaker with rib-knit cuffs and hem and a drawcord hood.',
                'features' => ['Lightweight cotton-look shell', 'Drawcord hood', 'Rib-knit cuffs and hem', 'Side entry pockets', 'Full-length front zip'],
            ],
            [
                'image' => 'outerwear-21.webp',
                'name'  => "Men's Colour-Block Hooded Windbreaker - White/Red/Navy",
                'intro' => 'Bold colour-block windbreaker with a hood, contrast lining and silver-tone zipped pockets.',
                'features' => ['Colour-block shell', 'Hood with contrast lining', 'Zipped hand pockets', 'Full-length front zip', 'Elastic cuffs'],
            ],
            [
                'image' => 'outerwear-22.webp',
                'name'  => "Men's Lightweight Hooded Jacket - Olive",
                'intro' => 'Minimal lightweight hooded jacket with a relaxed fit and zipped hand pockets.',
                'features' => ['Lightweight stretch shell', 'Attached hood', 'Zipped hand pockets', 'Elastic cuffs and hem', 'Relaxed fit'],
            ],
            [
                'image' => 'outerwear-23.webp',
                'name'  => "Men's Jersey-Lined Hooded Jacket - Blue",
                'intro' => 'Hooded jacket with a soft grey jersey lining and a striped zip tape detail.',
                'features' => ['Water-repellent shell', 'Grey jersey lining', 'Striped zip tape detail', 'Side entry pockets', 'Elastic cuffs'],
            ],
            [
                'image' => 'outerwear-24.webp',
                'name'  => "Men's Colour-Block Hooded Windbreaker - Green/Navy",
                'intro' => 'Sporty colour-block windbreaker with white chest stripes, a navy hood and elastic cuffs.',
                'features' => ['Colour-block shell', 'Contrast white stripe', 'Attached hood', 'Side entry pockets', 'Elastic cuffs'],
            ],
            [
                'image' => 'outerwear-25.webp',
                'name'  => "Men's Colour-Block Track Jacket - Blue/Black/White",
                'intro' => 'Retro-inspired colour-block track jacket with a stand collar and raglan sleeves.',
                'features' => ['Lightweight woven shell', 'Stand collar', 'Raglan sleeves', 'Full-length front zip', 'Elastic cuffs and hem'],
            ],
            [
                'image' => 'outerwear-26.webp',
                'name'  => "Men's Hooded Stretch Shell Jacket - Navy",
                'intro' => 'Technical hooded shell jacket with reflective details and stretch for comfortable movement.',
                'features' => ['Stretch water-repellent shell', 'Adjustable hood', 'Reflective details', 'Zipped hand pockets', 'Adjustable cuffs'],
            ],
        ];
    }
}

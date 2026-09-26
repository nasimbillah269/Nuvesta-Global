<?php

namespace Database\Seeders;

/**
 * Nuvesta outerwear collection → "Outerwear" product category
 * (creates Men's / Woman's / Kids sub categories under Outerwear if missing).
 *
 *   php artisan db:seed --class=OuterwearProductsSeeder
 */
class OuterwearProductsSeeder extends ProductCatalogSeeder
{
    protected function categorySlug(): string
    {
        return 'outerwear';
    }

    protected function imageDir(): string
    {
        return 'outerwear-products';
    }

    protected function products(): array
    {
        return [
            // ---------- puffer & padded jackets ----------
            [
                'image' => 'outer-01.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Hooded Puffer Jacket – Black',
                'intro' => 'Clean, minimal hooded puffer jacket with wide baffle quilting and a smooth matte shell for everyday cold-weather wear.',
                'features' => ['Matte water-repellent shell', 'Padded wide-baffle construction', 'Fixed insulated hood', 'Concealed side pockets', 'Full-length front zip'],
            ],
            [
                'image' => 'outer-02.webp', 'sub' => 'Kids',
                'name'  => 'Nuvesta Kids Colour-Block Puffer Jacket – Navy/Olive',
                'intro' => 'Warm colour-block puffer for kids with a padded hood and reflective piping on the pockets for extra visibility.',
                'features' => ['Colour-block navy and olive shell', 'Padded hood', 'Reflective pocket piping', 'Full zip with chin guard', 'Warm padded filling'],
            ],
            [
                'image' => 'outer-03.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Lightweight Packable Puffer Jacket – Charcoal',
                'intro' => 'Light, packable channel-quilted puffer with a stand collar – easy to layer and carry on the go.',
                'features' => ['Lightweight packable padding', 'Stand collar', 'Channel quilting', 'Zipped side pockets', 'Contrast inner lining'],
            ],
            [
                'image' => 'outer-04.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Chevron Quilted Jacket – Navy',
                'intro' => 'Fitted women’s quilted jacket with a chevron front, stretch side panels and bright contrast zip pulls.',
                'features' => ['Chevron quilted front', 'Stretch side panels for a tailored fit', 'Stand collar with contrast lining', 'Zipped side pockets', 'Two-way front zip'],
            ],
            [
                'image' => 'outer-05.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Quilted Puffer Gilet – Black',
                'intro' => 'Slim channel-quilted puffer gilet with a stand collar – the perfect layering piece over knitwear and sweats.',
                'features' => ['Narrow channel quilting', 'Stand collar', 'Zipped side pockets', 'Contrast binding at armholes', 'Lightweight padding'],
            ],
            [
                'image' => 'outer-06.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Channel-Quilted Down-Look Jacket – Black',
                'intro' => 'Glossy channel-quilted jacket with a down-look fill and a contrast orange zip puller.',
                'features' => ['High-shine shell fabric', 'Down-look padded channels', 'Stand collar', 'Contrast zip puller', 'Side pockets'],
            ],

            // ---------- quilted jackets ----------
            [
                'image' => 'outer-07.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Diamond Quilted Oversized Jacket – Sage',
                'intro' => 'Oversized collarless diamond-quilted jacket with snap front, contrast binding and large patch pockets.',
                'features' => ['Diamond quilting', 'Collarless round neck', 'Snap-button front', 'Large patch pockets', 'Ribbed cuffs'],
            ],
            [
                'image' => 'outer-08.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Onion-Quilted Liner Jacket – Khaki',
                'intro' => 'Relaxed liner-style jacket with onion quilting, snap closure and a clean collarless neckline.',
                'features' => ['Onion quilting pattern', 'Collarless neckline', 'Snap-button front', 'Relaxed boxy fit', 'Lightweight padding'],
            ],
            [
                'image' => 'outer-09.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Diamond Quilted Field Jacket – Olive',
                'intro' => 'Classic diamond-quilted field jacket with a corduroy-look stand collar, snap placket and flap pockets.',
                'features' => ['Diamond quilted shell', 'Stand collar', 'Zip with snap storm placket', 'Flap patch pockets', 'Lightweight padding'],
            ],
            [
                'image' => 'outer-10.webp', 'sub' => 'Kids',
                'name'  => 'Nuvesta Kids Sherpa-Lined Quilted Hooded Jacket – Slate',
                'intro' => 'Cosy quilted hooded jacket for kids with a soft sherpa lining in the hood and collar.',
                'features' => ['Wave quilted shell', 'Sherpa-lined hood and collar', 'Full-length zip', 'Warm padded body', 'Side pockets'],
            ],
            [
                'image' => 'outer-11.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Quilted Faux-Leather Shacket – Cognac',
                'intro' => 'On-trend oversized shacket in soft faux leather with diamond quilting and horn-look buttons.',
                'features' => ['Soft faux-leather (PU) fabric', 'Diamond quilting', 'Shirt collar', 'Horn-look button front', 'Oversized, dropped-shoulder fit'],
            ],
            [
                'image' => 'outer-12.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Quilted Utility Jacket – Dark Olive',
                'intro' => 'Diamond-quilted utility jacket with a chest zip pocket, large bellow pockets and antique-look zip.',
                'features' => ['Diamond quilted shell', 'Stand collar', 'Chest zip pocket', 'Large lower patch pockets', 'Antique brass-look zip'],
            ],

            // ---------- parkas ----------
            [
                'image' => 'outer-13.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Faux-Fur Hood Down Parka – Rust',
                'intro' => 'Heavy-duty winter parka with a detachable faux-fur hood trim, baffled down-look lining and utility pockets.',
                'features' => ['Faux-fur trimmed hood', 'Baffled padded lining', 'Two-way zip with storm flap', 'Large flap cargo pockets', 'Adjustable cuffs'],
            ],
            [
                'image' => 'outer-14.webp', 'sub' => 'Kids',
                'name'  => 'Nuvesta Girls Sherpa Hood Padded Parka – Khaki',
                'intro' => 'Warm padded parka for girls with a sherpa-lined hood and statement silver zip pockets.',
                'features' => ['Sherpa-lined hood', 'Padded warm body', 'Silver-tone zips', 'Four zipped pockets', 'Dipped back hem'],
            ],
            [
                'image' => 'outer-15.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Faux-Fur Trim Hooded Parka – Black',
                'intro' => 'Tailored women’s parka with a faux-fur trimmed hood, snap storm placket and sleeve utility pocket.',
                'features' => ['Faux-fur trimmed hood', 'Zip with snap storm placket', 'Sleeve utility pocket', 'Rib inner cuffs', 'Padded for warmth'],
            ],
            [
                'image' => 'outer-16.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Fur-Hood Padded Parka – Olive',
                'intro' => 'Longline padded parka in olive with a fur-trimmed hood and horizontal quilting for serious winter warmth.',
                'features' => ['Fur-trimmed hood', 'Horizontal padded quilting', 'Sleeve pocket', 'Longline cut', 'Adjustable cuffs'],
            ],
            [
                'image' => 'outer-17.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Hooded Winter Parka – Black',
                'intro' => 'Smart winter parka with a faux-fur hood, quilted inner bib and zipped chest pocket.',
                'features' => ['Faux-fur trimmed hood', 'Quilted inner bib', 'Two-way zip with snap placket', 'Zipped chest pocket', 'Flap hand pockets'],
            ],
            [
                'image' => 'outer-18.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Longline Hooded Parka – Mustard',
                'intro' => 'Knee-length women’s parka in mustard with a sherpa and faux-fur lined hood and adjustable drawcords.',
                'features' => ['Sherpa and faux-fur hood', 'Adjustable hood drawcords', 'Snap storm placket', 'Zipped hand pockets', 'Longline, knee-length cut'],
            ],

            // ---------- shells, softshells & windbreakers ----------
            [
                'image' => 'outer-19.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Hooded Ripstop Windbreaker – Sage',
                'intro' => 'Lightweight ripstop windbreaker with a stowable-look hood, chest zip pocket and contrast zip pulls.',
                'features' => ['Ripstop shell fabric', 'Adjustable hood', 'Chest zip pocket', 'Zipped hand pockets', 'Elastic cuffs'],
            ],
            [
                'image' => 'outer-20.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Stand-Collar Softshell Jacket – Navy',
                'intro' => 'Versatile softshell jacket with a stand collar, chest zip pocket and stretch for comfortable movement.',
                'features' => ['Stretch softshell fabric', 'Stand collar', 'Chest zip pocket', 'Zipped hand pockets', 'Adjustable cuffs'],
            ],
            [
                'image' => 'outer-21.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Waterproof Hooded Shell Jacket – Grey',
                'intro' => 'Technical hooded shell jacket with taped seams and bonded details – built for running and outdoor training in wet weather.',
                'features' => ['Waterproof, seam-taped shell', 'Adjustable hood', 'Bonded zip pockets', 'Raglan sleeves for movement', 'Lightweight and breathable'],
            ],
            [
                'image' => 'outer-22.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Colour-Block Overhead Anorak – Khaki/Charcoal',
                'intro' => 'Overhead half-zip anorak in a two-tone colour block with a stow-away hood and kangaroo pocket.',
                'features' => ['Colour-block shell', 'Half-zip overhead style', 'Hood with drawcords', 'Front kangaroo pocket', 'Water-repellent finish'],
            ],
            [
                'image' => 'outer-23.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Colour-Block Hooded Windbreaker – Sky/Navy',
                'intro' => 'Sporty colour-block windbreaker with a hood, zipped pockets and toggle-adjustable hem.',
                'features' => ['Lightweight stretch shell', 'Colour-block shoulders and sleeves', 'Hood', 'Zipped hand pockets', 'Toggle-adjustable hem'],
            ],
            [
                'image' => 'outer-24.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Lightweight Stand-Collar Jacket – Olive',
                'intro' => 'Minimal lightweight jacket with a stand collar, vertical chest pocket and clean two-way zip.',
                'features' => ['Water-repellent cotton-look shell', 'Stand collar', 'Vertical chest pocket', 'Two-way front zip', 'Regular fit'],
            ],
        ];
    }
}

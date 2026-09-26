<?php

namespace Database\Seeders;

/**
 * Nuvesta knit sample collection → "Knit" product category.
 *
 *   php artisan db:seed --class=KnitProductsSeeder
 */
class KnitProductsSeeder extends ProductCatalogSeeder
{
    protected function categorySlug(): string
    {
        return 'knit-wear';
    }

    protected function imageDir(): string
    {
        return 'knit-products';
    }

    protected function products(): array
    {
        return [
            [
                'image' => 'knit-01.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Fleece Cargo Jogger Pants – Olive',
                'intro' => 'Relaxed-fit fleece jogger with utility cargo pockets and drawcord hems – a comfortable, street-ready bottom for everyday wear.',
                'features' => ['Soft brushed fleece fabric', 'Elastic waistband with drawcord', 'Front patch pockets and side cargo pockets', 'Adjustable toggle drawcord at hem', 'Relaxed, easy fit'],
            ],
            [
                'image' => 'knit-02.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Acid Wash Graphic Hoodie – Taupe',
                'intro' => 'Oversized pullover hoodie with a vintage acid-wash finish and a small chest print for a lived-in, casual look.',
                'features' => ['Garment acid-wash finish', 'Chest graphic print', 'Drawcord hood', 'Kangaroo front pocket', 'Ribbed cuffs and hem', 'Dropped shoulder, relaxed fit'],
            ],
            [
                'image' => 'knit-03.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta LS Sweat Hood – Acid Wash Charcoal',
                'sku'   => 'ONLNELLY L/S HOOD BOX',
                'intro' => 'Long sleeve boxy sweat hoodie in a garment acid-washed charcoal, finished with a V-insert neckline and contrast drawcords.',
                'specs' => ['Style name' => 'ONLNELLY L/S HOOD BOX', 'Quality' => '60% Cotton, 40% Polyester', 'Fabric' => 'Fleece, inside brushed, 240 GSM', 'Print / Embroidery' => 'N/A', 'Wash' => "Garment's acid wash"],
                'features' => ['Boxy, dropped-shoulder fit', 'V-insert at neckline', 'Kangaroo pocket', 'Ribbed cuffs and hem'],
            ],
            [
                'image' => 'knit-04.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Crinkle Acid Wash Fleece Shorts – Navy',
                'sku'   => 'ETA-W-06-03-24',
                'intro' => 'Fleece sweat shorts with a crinkle acid-wash effect, elastic drawcord waist and side pockets.',
                'specs' => ['Style name' => 'ETA-W-06-03-24', 'Quality' => '60% Cotton, 40% Polyester', 'Fabric' => 'Fleece, inside brushed, 250 GSM', 'Print / Embroidery' => 'N/A', 'Wash' => "Garment's crinkle acid wash"],
                'features' => ['Elastic waistband with drawcord', 'Side seam pockets', 'Relaxed knee-length fit'],
            ],
            [
                'image' => 'knit-05.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Full-Zip Funnel Neck Sweat Jacket – Navy',
                'intro' => 'Clean full-zip sweat jacket with a funnel neck, contrast striped zip tape and a tonal badge on the chest.',
                'features' => ['Funnel neck', 'Full-length zip with contrast tape', 'Tonal chest badge', 'Side pockets', 'Ribbed cuffs and hem'],
            ],
            [
                'image' => 'knit-06.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta High-Waist Crepe Jersey Leggings – Black',
                'sku'   => 'ETA-OS-50-05-24',
                'intro' => 'High-waisted long pant in stretch crepe jersey with a smooth wide waistband and a slim, sculpting fit.',
                'specs' => ['Style name' => 'ETA-OS-50-05-24', 'Quality' => '95% Polyester, 5% Elastane', 'Fabric' => 'Crepe jersey, 200 GSM', 'Print / Embroidery' => 'N/A', 'Wash' => 'N/A'],
                'features' => ['High-rise wide waistband', 'Four-way stretch', 'Slim, body-contour fit'],
            ],
            [
                'image' => 'knit-07.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Printed Jersey Drawstring Shorts – Berry',
                'intro' => 'All-over printed knit shorts with a contrast drawstring waist – light, soft and perfect for lounge or summer wear.',
                'features' => ['All-over print', 'Elastic waist with contrast drawcord', 'Side pockets', 'Soft knit fabric'],
            ],
            [
                'image' => 'knit-08.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Half-Zip Polo Collar Sweatshirt – Sage',
                'intro' => 'Polished half-zip sweatshirt with a polo collar, ring-pull zip and front princess seams for a tailored silhouette.',
                'features' => ['Polo collar', 'Half zip with ring puller', 'Front panel seams', 'Ribbed cuffs and hem'],
            ],
            [
                'image' => 'knit-09.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Space-Dye Quarter-Zip Active Top – Lilac',
                'intro' => 'Lightweight quarter-zip active top in space-dye jersey with raglan sleeves and a stand-up collar.',
                'features' => ['Space-dye melange fabric', 'Quarter zip with stand collar', 'Raglan sleeves', 'Slim active fit'],
            ],
            [
                'image' => 'knit-10.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Crinkle Acid Wash Fleece Shorts – Charcoal',
                'sku'   => 'ETA-W-06-03-24-CH',
                'intro' => 'Charcoal colourway of our crinkle acid-wash fleece shorts with elastic drawcord waist and side pockets.',
                'specs' => ['Style name' => 'ETA-W-06-03-24', 'Quality' => '60% Cotton, 40% Polyester', 'Fabric' => 'Fleece, inside brushed, 250 GSM', 'Print / Embroidery' => 'N/A', 'Wash' => "Garment's crinkle acid wash"],
                'features' => ['Elastic waistband with drawcord', 'Side seam pockets', 'Relaxed knee-length fit'],
            ],
            [
                'image' => 'knit-11.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Patch Pocket Sweat Shorts – Off White',
                'intro' => 'Clean off-white sweat shorts with large front patch pockets and a drawcord waist.',
                'features' => ['Front patch pockets', 'Elastic waist with drawcord', 'Soft knit fabric', 'Regular fit'],
            ],
            [
                'image' => 'knit-12.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Button-Tab Pleated Shorts – Stone',
                'intro' => 'Smart pleated knit shorts with decorative button tabs on the waistband and slant side pockets.',
                'features' => ['Button-tab waistband detail', 'Front pleats', 'Slant side pockets', 'Tailored look in comfortable knit'],
            ],
            [
                'image' => 'knit-13.webp', 'sub' => 'Kids',
                'name'  => 'Nuvesta Frill Terry Shorts – Acid Wash Black',
                'sku'   => 'KOGLUCINDA FRILL SHORTSUB',
                'intro' => 'Girls’ terry shorts with frill side trims and an acid-wash finish – comfortable and playful.',
                'specs' => ['Style name' => 'KOGLUCINDA FRILL SHORTSUB', 'Quality' => '60% Cotton, 40% Polyester', 'Fabric' => 'Terry, 220 GSM', 'Print / Embroidery' => 'N/A', 'Wash' => "Garment's acid wash"],
                'features' => ['Frill side panels', 'Elastic waistband', 'Soft terry fabric'],
            ],
            [
                'image' => 'knit-14.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Waffle Rib Sweat Shorts – White',
                'sku'   => 'ETA-OS-29-12-24',
                'intro' => 'Textured design-rib sweat shorts with stretch for comfort and a drawcord waist.',
                'specs' => ['Style name' => 'ETA-OS-29-12-24', 'Quality' => '85% Cotton, 10% Polyester, 5% Elastane', 'Fabric' => 'Design rib, 330 GSM', 'Print / Embroidery' => 'N/A', 'Wash' => 'N/A'],
                'features' => ['Waffle / design rib texture', 'Elastic waist with drawcord', 'Side pockets'],
            ],
            [
                'image' => 'knit-15.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Fleece Jogger Pants – Off White',
                'intro' => 'Classic fleece jogger with ribbed ankle cuffs and a drawcord waist – an essential lounge and streetwear piece.',
                'features' => ['Brushed fleece fabric', 'Elastic waist with drawcord', 'Ribbed ankle cuffs', 'Side pockets'],
            ],
            [
                'image' => 'knit-16.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Straight-Leg Sweatpants – Grey Melange',
                'intro' => 'Straight-leg sweatpants in grey melange knit with an elastic waistband for all-day comfort.',
                'features' => ['Grey melange knit', 'Elastic waistband', 'Straight open hem', 'Side pockets'],
            ],
            [
                'image' => 'knit-17.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Drawstring Straight Sweatpants – Grey',
                'intro' => 'Everyday straight-fit sweatpants with a drawstring waist and clean open hems.',
                'features' => ['Elastic waist with drawstring', 'Straight fit', 'Side pockets', 'Soft knit fabric'],
            ],
            [
                'image' => 'knit-18.webp', 'sub' => "Men's",
                'name'  => 'Nuvesta Side-Stripe Jogger Pants – Dusty Blue',
                'intro' => 'Sporty jogger pants with a contrast side stripe, snap detail at the waist and elasticated hems.',
                'features' => ['Contrast side stripe', 'Elastic waist with snap detail', 'Elasticated ankle hems', 'Side pockets'],
            ],
            [
                'image' => 'knit-19.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Textured Crew Neck Sweatshirt – Yellow',
                'intro' => 'Bright textured-knit crew neck sweatshirt with dropped shoulders and ribbed trims.',
                'features' => ['Textured knit fabric', 'Crew neck', 'Dropped shoulders', 'Ribbed cuffs and hem'],
            ],
            [
                'image' => 'knit-20.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Single Jersey Lounge Pants – Sage',
                'sku'   => '12.502360',
                'intro' => 'Soft 100% cotton single jersey lounge pant with a drawcord waist and relaxed tapered leg.',
                'specs' => ['Style name' => '12.502360', 'Quality' => '100% Cotton', 'Fabric' => 'Single jersey, 190 GSM', 'Print' => 'N/A', 'Embroidery' => 'N/A', 'Wash' => 'N/A'],
                'features' => ['Elastic waist with drawcord', 'Side pockets', 'Relaxed tapered fit'],
            ],
            [
                'image' => 'knit-21.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Drop-Shoulder Crew Sweatshirt – Peach',
                'intro' => 'Relaxed crew neck sweatshirt in a soft peach tone with dropped shoulders and blouson sleeves.',
                'features' => ['Crew neck', 'Dropped shoulders', 'Blouson sleeves with rib cuffs', 'Ribbed hem'],
            ],
            [
                'image' => 'knit-22.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Collared Zip-Through Sweat Jacket – Blush',
                'intro' => 'Collared zip-through sweat jacket with a yoke seam and relaxed drop-shoulder fit.',
                'features' => ['Shirt collar', 'Full-length zip', 'Front yoke seam', 'Ribbed cuffs and hem'],
            ],
            [
                'image' => 'knit-23.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Gingham Wide-Leg Lounge Pants',
                'intro' => 'Wide-leg knit lounge pants in a mini gingham check with a drawstring waist.',
                'features' => ['Mini gingham check knit', 'Elastic waist with drawstring', 'Wide leg', 'Soft, easy drape'],
            ],
            [
                'image' => 'knit-24.webp', 'sub' => "Woman's",
                'name'  => 'Nuvesta Fitted Full-Zip Jacket – Heather Blue',
                'intro' => 'Fitted full-zip jacket in heather jersey with a stand collar, contour seams and zipped side pockets.',
                'features' => ['Stand collar', 'Full-length zip', 'Contour seams for a fitted shape', 'Side pockets'],
            ],
        ];
    }
}

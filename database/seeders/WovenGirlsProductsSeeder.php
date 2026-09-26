<?php

namespace Database\Seeders;

/**
 * Nuvesta girls' collection → "Woven" › "Kids Girls" (sub category is created if missing).
 *
 *   php artisan db:seed --class=WovenGirlsProductsSeeder
 */
class WovenGirlsProductsSeeder extends ProductCatalogSeeder
{
    protected function categorySlug(): string
    {
        return 'woven';
    }

    protected function imageDir(): string
    {
        return 'woven-girls-products';
    }

    protected function products(): array
    {
        $sub = 'Kids Girls';

        return [
            [
                'image' => 'girls-01.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Mango Squad Tee & Shorts Set – White/Yellow',
                'intro' => 'Playful two-piece set for girls: a white ringer tee with a “Mango Squad” print and matching yellow shorts.',
                'features' => ['Front “Mango Squad” graphic print', 'Contrast yellow neck and sleeve binding', 'Matching yellow shorts', 'Soft, comfortable fit'],
            ],
            [
                'image' => 'girls-02.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Contrast Binding Cami Top – White/Pink',
                'intro' => 'Simple white cami top with soft pink binding on the straps and neckline and a small embroidered motif.',
                'features' => ['Contrast pink binding', 'Thin shoulder straps', 'Small chest embroidery', 'Straight hem'],
            ],
            [
                'image' => 'girls-03.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls “Bloom” Graphic Cami Top – Sky Blue',
                'intro' => 'Sky-blue cami top with a varsity “69 Bloom” floral graphic and navy contrast straps.',
                'features' => ['Varsity floral graphic print', 'Navy contrast binding and straps', 'Relaxed straight fit'],
            ],
            [
                'image' => 'girls-04.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Smocked Frill Sleeve Dress – Nude',
                'intro' => 'Fully smocked sleeveless dress with frill cap sleeves, a ruffled neckline and a flippy frill hem.',
                'features' => ['All-over smocking', 'Frill cap sleeves', 'Ruffle neckline', 'Frill hem'],
            ],
            [
                'image' => 'girls-05.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Hawaii Colour-Block Oversized Tee – Navy',
                'intro' => 'Oversized navy tee with contrast shoulder panels and sleeve bands and a collegiate “Hawaii” print.',
                'features' => ['Collegiate chest print', 'Contrast shoulder and sleeve panels', 'Dropped shoulders', 'Oversized fit'],
            ],
            [
                'image' => 'girls-06.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Textured Lettuce-Edge Crop Tee – Olive',
                'intro' => 'Textured crinkle crop tee with lettuce-edge hems and a small sunflower embroidery on the chest.',
                'features' => ['Crinkle textured fabric', 'Lettuce-edge sleeves and hem', 'Sunflower chest embroidery', 'Cropped length'],
            ],
            [
                'image' => 'girls-07.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Off-Shoulder Los Angeles Sweatshirt – Royal Blue',
                'intro' => 'Slouchy off-the-shoulder sweatshirt with a “Los Angeles California” varsity print.',
                'features' => ['Asymmetric off-shoulder neckline', 'Varsity front print', 'Ribbed cuffs and hem', 'Relaxed fit'],
            ],
            [
                'image' => 'girls-08.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Tank Top & Lace Tiered Skirt Set – White',
                'intro' => 'Two-piece set with a cropped knit tank top and a tiered skirt with lace panels.',
                'features' => ['Cropped tank top', 'Elastic waist skirt', 'Tiered lace panels', 'Matching set'],
            ],
            [
                'image' => 'girls-09.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Square Neck Flutter Sleeve Top – Grey Melange',
                'intro' => 'Square-neck top in grey melange with sheer floral flutter sleeves.',
                'features' => ['Square neckline', 'Sheer flutter sleeves', 'Soft melange fabric', 'Straight hem'],
            ],
            [
                'image' => 'girls-10.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Smocked Tiered Strappy Dress – Burgundy',
                'intro' => 'Strappy summer dress with a smocked bodice, frilled tiers and a lettuce-edge hem.',
                'features' => ['Smocked bodice', 'Adjustable-look thin straps', 'Frill-trimmed tiers', 'Knee length'],
            ],
            [
                'image' => 'girls-11.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Smocked Top & Rib Flare Pants Set – Dusty Rose',
                'intro' => 'Co-ord set with a smocked V-neck peplum top and matching ribbed flare trousers.',
                'features' => ['Smocked V-neck top', 'Peplum frill hem', 'Ribbed wide flare pants', 'Matching co-ord set'],
            ],
            [
                'image' => 'girls-12.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Textured Lettuce-Edge Tee – Khaki',
                'intro' => 'Easy textured tee with a crew neck and lettuce-edge trims on sleeves and hem.',
                'features' => ['Textured knit fabric', 'Lettuce-edge trims', 'Crew neck', 'Regular fit'],
            ],
            [
                'image' => 'girls-13.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Stripe Lettuce-Edge Tee – Mocha',
                'intro' => 'Fine-stripe crew neck tee with delicate lettuce-edge finishing.',
                'features' => ['Fine stripe pattern', 'Lettuce-edge sleeves and hem', 'Crew neck', 'Slim regular fit'],
            ],
            [
                'image' => 'girls-14.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Smocked Bodice Midi Dress – Beige',
                'intro' => 'Short sleeve dress with a smocked bodice, V-shaped waist seam and a full flared skirt.',
                'features' => ['Smocked bodice and sleeves', 'V-shaped waist seam', 'Full flared skirt', 'Frill trims'],
            ],
            [
                'image' => 'girls-15.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Lace Square Neck Long Sleeve Top – Silver Grey',
                'intro' => 'All-over lace top with a square neckline and sheer balloon sleeves with elastic cuffs.',
                'features' => ['All-over lace', 'Square neckline', 'Sheer balloon sleeves', 'Elastic back and cuffs'],
            ],
            [
                'image' => 'girls-16.webp', 'sub' => $sub,
                'name'  => 'Nuvesta Girls Pointelle Cami & Shorts Set – Mauve',
                'intro' => 'Soft pointelle knit two-piece with a strappy cami top and drawstring shorts.',
                'features' => ['Pointelle knit fabric', 'Strappy cami top', 'Drawstring waist shorts', 'Matching set'],
            ],
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/**
 * Coverall collection → "Workwear" main product category
 * (creates the top-level Workwear category if missing).
 *
 *   php artisan db:seed --class=WorkwearSeeder
 */
class WorkwearSeeder extends ProductCatalogSeeder
{
    protected function categorySlug(): string
    {
        return 'workwear';
    }

    protected function imageDir(): string
    {
        return 'workwear';
    }

    public function run(): void
    {
        if (!DB::table('attributes')->where('type', 0)->where('slug', 'workwear')->exists()) {
            DB::table('attributes')->insert([
                'name'        => 'Workwear',
                'slug'        => 'workwear',
                'parent_id'   => null,
                'type'        => 0,
                'status'      => 'active',
                'fetured'     => 1,
                'addedby_id'  => 1,
                'editedby_id' => 1,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
            $this->command->info('  created main category Workwear');
        }

        parent::run();
    }

    protected function products(): array
    {
        return [
            [
                'image' => 'workwear-01.webp',
                'name'  => 'Heavy Duty Cotton Twill Coverall - Orange',
                'intro' => 'High-visibility heavy-duty coverall in durable cotton twill with multiple utility pockets for industrial and site work.',
                'features' => ['Durable cotton twill fabric', 'Concealed front zip', 'Two flap chest pockets', 'Leg tool and cargo pockets', 'Button-adjustable cuffs'],
            ],
            [
                'image' => 'workwear-02.webp',
                'name'  => 'Cargo Pocket Work Coverall - Khaki',
                'intro' => 'Practical full-length work coverall with cargo leg pockets, elasticated waist back and cuffed ankles.',
                'features' => ['Hard-wearing poly-cotton twill', 'Full front zip', 'Two flap chest pockets', 'Side cargo leg pockets', 'Elasticated cuffs and ankles'],
            ],
            [
                'image' => 'workwear-03.webp',
                'name'  => 'Cargo Pocket Work Coverall - Charcoal Grey',
                'intro' => 'Hard-wearing charcoal coverall with cargo leg pockets and elasticated cuffs – ideal for workshop and maintenance crews.',
                'features' => ['Hard-wearing poly-cotton twill', 'Full front zip', 'Two flap chest pockets', 'Side cargo leg pockets', 'Elasticated cuffs and ankles'],
            ],
            [
                'image' => 'workwear-04.webp',
                'name'  => 'Heavy Duty Cotton Twill Coverall - Olive',
                'intro' => 'Rugged olive coverall in heavy cotton twill with flap chest pockets and a leg tool pocket.',
                'features' => ['Durable cotton twill fabric', 'Concealed front zip', 'Two flap chest pockets', 'Leg tool and cargo pockets', 'Sleeve utility pocket'],
            ],
        ];
    }
}

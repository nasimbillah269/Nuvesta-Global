<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('attributes')) {
            return;
        }

        Schema::create('attributes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            
            $table->id();
            $table->string('name', 191)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('slug', 255)->collation('utf8mb4_unicode_ci')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('src_id')->nullable();
            $table->text('short_description')->collation('utf8mb4_unicode_ci')->nullable();
            $table->text('description')->collation('utf8mb4_unicode_ci')->nullable();
            $table->bigInteger('view')->default(0);
            $table->boolean('menu_type')->nullable()->comment('0=Custom Link, 1=Pages, 2=Post Categories, 3=Service Categories;');
            $table->string('location', 200)->collation('utf8mb4_unicode_ci')->nullable();
            $table->boolean('target')->default(0);
            $table->string('icon', 200)->collation('utf8mb4_unicode_ci')->nullable();
            $table->float('amounts', 10, 2)->default(0.00);
            $table->float('min_shopping')->nullable();
            $table->float('max_shopping')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('seo_title', 200)->collation('utf8mb4_unicode_ci')->nullable();
            $table->text('seo_description')->collation('utf8mb4_unicode_ci')->nullable();
            $table->text('seo_keyword')->collation('utf8mb4_unicode_ci')->nullable();
            $table->longText('data_counts')->collation('utf8mb4_bin')->nullable();
            $table->integer('type')->default(0)->comment('0=Category, 1=Slider, 2=Brand, 3=Client, 4=Galleries, 5=Portfolio, 6=Blog Category, 7=Blog Tags 8=Menus, 9=Attributes 10=Product Tags, 11= Payment method, 12=expenses Type, 13=Coupons');
            $table->string('status', 10)->collation('utf8mb4_unicode_ci')->default('temp')->comment('temp, active, inactive');
            $table->boolean('fetured')->default(0);
            $table->bigInteger('addedby_id')->nullable();
            $table->bigInteger('editedby_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // keep the exact FLOAT columns of the original database (Laravel 10 creates DOUBLE)
        DB::statement('ALTER TABLE `attributes` MODIFY `amounts` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `attributes` MODIFY `min_shopping` float DEFAULT NULL');
        DB::statement('ALTER TABLE `attributes` MODIFY `max_shopping` float DEFAULT NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributes');
    }
};

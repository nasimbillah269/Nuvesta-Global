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
        if (Schema::hasTable('posts')) {
            return;
        }

        Schema::create('posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->id();
            $table->string('name', 200)->nullable();
            $table->string('slug', 250)->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->text('seo_contents')->nullable();
            $table->string('sku_code', 100)->nullable();
            $table->string('bar_code', 100)->nullable();
            $table->integer('stock_out_limit')->default(0);
            $table->boolean('stock_status')->default(1);
            $table->boolean('final_stock_status')->default(1);
            $table->integer('quantity')->nullable();
            $table->float('purchase_price', 10, 2)->default(0.00);
            $table->float('final_price', 10, 2)->default(0.00);
            $table->float('pos_price', 10, 2)->default(0.00);
            $table->float('discount', 10, 2)->default(0.00);
            $table->string('discount_type', 20)->nullable();
            $table->float('regular_price', 10, 2)->default(0.00);
            $table->float('min_price', 10, 2)->default(0.00);
            $table->float('max_price', 10, 2)->default(0.00);
            $table->timestamp('offer_start_date')->nullable();
            $table->timestamp('offer_end_date')->nullable();
            $table->integer('min_order_quantity')->default(1);
            $table->integer('max_order_quantity')->nullable();
            $table->string('weight_unit', 100)->nullable();
            $table->string('weight_amount', 50)->nullable();
            $table->string('dimensions_unit', 100)->nullable();
            $table->string('dimensions_length', 50)->nullable();
            $table->string('dimensions_width', 50)->nullable();
            $table->string('dimensions_height', 50)->nullable();
            $table->text('warranty_note')->nullable();
            $table->float('warranty_charge', 10, 2)->default(0.00);
            $table->string('warranty_note2', 100)->nullable();
            $table->float('warranty_charge2', 10, 2)->default(0.00);
            $table->boolean('variation_status')->default(0);
            $table->boolean('pos_status')->default(0);
            $table->boolean('emi_status')->default(0);
            $table->boolean('digital_status')->default(0);
            $table->boolean('classified_status')->default(0);
            $table->string('product_source', 50)->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('subbrand_id')->nullable();
            $table->integer('sell_count')->default(0);
            $table->integer('branch_count')->default(0);
            $table->boolean('product_type')->default(0);
            $table->text('tags')->nullable();
            $table->unsignedBigInteger('view')->default(0);
            $table->integer('type')->default(0)->comment('0=Page,1=Post, 2=Product');
            $table->string('seo_title', 191)->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keyword')->nullable();
            $table->string('template', 100)->nullable();
            $table->text('search_key')->nullable();
            $table->string('status', 10)->default('temp')->comment('temp,active,inactive');
            $table->boolean('new_arrival')->default(0);
            $table->boolean('fetured')->default(0);
            $table->boolean('up_coming')->default(0);
            $table->bigInteger('addedby_id')->nullable();
            $table->bigInteger('editedby_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->index(['name'], 'name');
            $table->index(['slug'], 'slug');
            $table->index(['final_price'], 'final_price');
            $table->index(['brand_id'], 'brand_id');
            $table->index(['regular_price'], 'regular_price');
        });

        // keep the exact FLOAT columns of the original database (Laravel 10 creates DOUBLE)
        DB::statement('ALTER TABLE `posts` MODIFY `purchase_price` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `posts` MODIFY `final_price` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `posts` MODIFY `pos_price` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `posts` MODIFY `discount` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `posts` MODIFY `regular_price` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `posts` MODIFY `min_price` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `posts` MODIFY `max_price` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `posts` MODIFY `warranty_charge` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `posts` MODIFY `warranty_charge2` float(10,2) NOT NULL DEFAULT 0.00');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

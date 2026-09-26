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
        if (Schema::hasTable('post_extras')) {
            return;
        }

        Schema::create('post_extras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->id();
            $table->unsignedBigInteger('src_id')->nullable();
            $table->string('name', 300)->nullable();
            $table->text('content')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->integer('drag')->default(0);
            $table->float('shipping_charge', 10, 2)->default(0.00);
            $table->string('sub_title', 300)->nullable();
            $table->text('description')->nullable();
            $table->string('data_type', 100)->nullable();
            $table->boolean('product_view')->default(0);
            $table->integer('data_limit')->nullable();
            $table->integer('category_id')->nullable();
            $table->text('image_link')->nullable();
            $table->string('image_link2', 200)->nullable();
            $table->string('image_link3', 200)->nullable();
            $table->string('status', 10)->nullable();
            $table->boolean('featured')->default(0);
            $table->integer('type')->default(0)->comment('0=Page,1=Subscribe, 2=Product Extra Attribute, 3= Shipping Zone, 4=Home Product Data, 5=offer Note, 6=Banner Note, 7=Featured Note Text');
            $table->bigInteger('addedby_id')->nullable();
            $table->bigInteger('editedby_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // keep the exact FLOAT columns of the original database (Laravel 10 creates DOUBLE)
        DB::statement('ALTER TABLE `post_extras` MODIFY `shipping_charge` float(10,2) NOT NULL DEFAULT 0.00');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_extras');
    }
};

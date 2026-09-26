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
        if (Schema::hasTable('carts')) {
            return;
        }

        Schema::create('carts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->id();
            $table->date('trans_date')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('color', 255)->nullable();
            $table->string('size', 255)->nullable();
            $table->text('sku_id')->collation('utf8mb4_bin')->nullable();
            $table->boolean('product_type')->default(0);
            $table->text('cookie')->nullable();
            $table->integer('quantity')->default(0);
            $table->boolean('emi')->default(0);
            $table->integer('coupon_id')->nullable();
            $table->integer('address')->nullable();
            $table->string('warranty_note', 100)->nullable();
            $table->float('warranty_charge', 10, 2)->default(0.00);
            $table->unsignedBigInteger('addedby_id')->nullable();
            $table->unsignedBigInteger('editedby_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // keep the exact FLOAT columns of the original database (Laravel 10 creates DOUBLE)
        DB::statement('ALTER TABLE `carts` MODIFY `warranty_charge` float(10,2) NOT NULL DEFAULT 0.00');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

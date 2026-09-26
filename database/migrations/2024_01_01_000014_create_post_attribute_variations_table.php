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
        if (Schema::hasTable('post_attribute_variations')) {
            return;
        }

        Schema::create('post_attribute_variations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->integer('id', true);
            $table->integer('src_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('attribute_id')->nullable();
            $table->integer('attribute_item_id')->nullable();
            $table->string('attribute_item_value', 100)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_attribute_variations');
    }
};

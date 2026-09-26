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
        if (Schema::hasTable('emi_charges')) {
            return;
        }

        Schema::create('emi_charges', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            
            $table->integer('id', true);
            $table->string('bank_name', 200)->nullable();
            $table->float('month_3', 10, 2)->default(0.00);
            $table->float('month_6', 10, 2)->default(0.00);
            $table->float('month_9', 10, 2)->default(0.00);
            $table->float('month_12', 10, 2)->default(0.00);
            $table->float('month_18', 10, 2)->default(0.00);
            $table->float('month_24', 10, 2)->default(0.00);
            $table->float('month_36', 10, 2)->default(0.00);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // keep the exact FLOAT columns of the original database (Laravel 10 creates DOUBLE)
        DB::statement('ALTER TABLE `emi_charges` MODIFY `month_3` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `emi_charges` MODIFY `month_6` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `emi_charges` MODIFY `month_9` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `emi_charges` MODIFY `month_12` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `emi_charges` MODIFY `month_18` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `emi_charges` MODIFY `month_24` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `emi_charges` MODIFY `month_36` float(10,2) NOT NULL DEFAULT 0.00');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emi_charges');
    }
};

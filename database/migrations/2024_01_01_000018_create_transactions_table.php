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
        if (Schema::hasTable('transactions')) {
            return;
        }

        Schema::create('transactions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->id();
            $table->bigInteger('src_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('billing_name', 100)->nullable();
            $table->string('billing_mobile', 30)->nullable();
            $table->string('billing_email', 100)->nullable();
            $table->text('billing_address')->nullable();
            $table->text('billing_note')->nullable();
            $table->string('type', 20)->nullable()->default('0')->comment('0=order, 1=Recharge,2=Refund, 3=POS Order, 4=expenses, 5=Transfer, 6=Withdrawal, 7=Deposit , 8=Purchase Order, 9=POS Order Refund, 10=Purchase Order Refund');
            $table->string('transection_id', 100)->nullable();
            $table->string('payment_method', 50)->nullable();
            $table->integer('method_id')->nullable();
            $table->integer('method_option_id')->nullable();
            $table->float('amount', 10, 2)->default(0.00);
            $table->integer('branch_id')->nullable();
            $table->string('currency', 10)->nullable()->comment('BDT');
            $table->string('status', 50)->nullable()->default('Pending')->comment('Pending, Fail, Cancel, Success');
            $table->bigInteger('addedby_id')->nullable();
            $table->bigInteger('editedby_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // keep the exact FLOAT columns of the original database (Laravel 10 creates DOUBLE)
        DB::statement('ALTER TABLE `transactions` MODIFY `amount` float(10,2) NOT NULL DEFAULT 0.00');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

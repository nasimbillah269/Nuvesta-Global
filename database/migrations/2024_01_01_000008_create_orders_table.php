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
        if (Schema::hasTable('orders')) {
            return;
        }

        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->id();
            $table->bigInteger('invoice')->nullable();
            $table->string('invoice_number', 100)->nullable();
            $table->string('invoice_no', 100)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('email', 150)->nullable();
            $table->integer('division')->nullable();
            $table->integer('district')->nullable();
            $table->integer('city')->nullable();
            $table->text('address')->nullable();
            $table->text('full_address')->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->string('city_name', 200)->nullable();
            $table->string('company_name', 200)->nullable();
            $table->string('shipping_name', 100)->nullable();
            $table->string('shipping_mobile', 20)->nullable();
            $table->text('shipping_address')->nullable();
            $table->text('shipping_fulladdress')->nullable();
            $table->boolean('product_type')->default(0);
            $table->string('delivery_date', 100)->nullable();
            $table->string('delivery_time', 100)->nullable();
            $table->string('order_status', 20)->default('pending')->comment('temp, pending, confirmed, on delivery, completed, cancel, return');
            $table->string('return_status', 20)->default('pending')->comment('pending, confirmed, on delivery, completed, cancel');
            $table->float('return_amount', 10, 2)->default(0.00);
            $table->string('payment_status', 10)->nullable()->default('unpaid')->comment('unpaid, partial, paid');
            $table->string('payment_method', 100)->nullable();
            $table->string('transection', 100)->nullable();
            $table->boolean('emi_status')->default(0);
            $table->string('order_type', 15)->default('customer_order')->comment('customer_order, pos_order, purchase_order, quotation_order, transfers_order');
            $table->float('total_price', 10, 2)->default(0.00);
            $table->integer('total_items')->default(0);
            $table->integer('total_qty')->nullable()->default(0);
            $table->float('shipping_charge', 10, 2)->default(0.00);
            $table->float('getway_charge', 10, 2)->default(0.00);
            $table->float('tax', 10, 2)->default(0.00);
            $table->string('discount_type', 20)->nullable()->comment('Percantage, Flat');
            $table->float('discount', 10, 2)->default(0.00);
            $table->float('discount_price', 10, 2)->default(0.00);
            $table->float('coupon_discount', 10, 2)->default(0.00);
            $table->float('grand_total', 10, 2)->default(0.00);
            $table->float('paid_amount', 10, 2)->default(0.00);
            $table->float('due_amount', 10, 2)->default(0.00);
            $table->float('extra_amount', 10, 2)->default(0.00);
            $table->float('extra_amount_pay', 10, 2)->default(0.00);
            $table->float('extra_amount_due', 10, 2)->default(0.00);
            $table->float('received_amount', 10, 2)->default(0.00);
            $table->float('changed_amount', 10, 2)->default(0.00);
            $table->float('total_purchase', 10, 2)->default(0.00);
            $table->float('profit_loss', 10, 2)->default(0.00);
            $table->integer('order_delivery_By')->nullable();
            $table->integer('coupon_id')->nullable();
            $table->string('search_key', 450)->nullable();
            $table->text('note')->nullable();
            $table->boolean('open_status')->default(0)->comment('0=unopen, 1=open, 2=hold');
            $table->timestamp('pending_at')->nullable();
            $table->integer('pending_by')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->integer('confirmed_by')->nullable();
            $table->text('confirmed_msg')->nullable();
            $table->timestamp('shipped_at')->nullable();
            $table->integer('shipped_by')->nullable();
            $table->text('shipped_msg')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->integer('delivered_by')->nullable();
            $table->text('delivered_msg')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->integer('cancelled_by')->nullable();
            $table->string('cancelled_reason', 100)->nullable();
            $table->text('cancelled_msg')->nullable();
            $table->timestamp('returned_at')->nullable();
            $table->integer('returned_by')->nullable();
            $table->text('returned_msg')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // keep the exact FLOAT columns of the original database (Laravel 10 creates DOUBLE)
        DB::statement('ALTER TABLE `orders` MODIFY `return_amount` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `total_price` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `shipping_charge` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `getway_charge` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `tax` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `discount` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `discount_price` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `coupon_discount` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `grand_total` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `paid_amount` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `due_amount` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `extra_amount` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `extra_amount_pay` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `extra_amount_due` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `received_amount` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `changed_amount` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `total_purchase` float(10,2) NOT NULL DEFAULT 0.00');
        DB::statement('ALTER TABLE `orders` MODIFY `profit_loss` float(10,2) NOT NULL DEFAULT 0.00');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

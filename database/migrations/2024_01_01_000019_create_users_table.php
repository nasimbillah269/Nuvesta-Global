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
        if (Schema::hasTable('users')) {
            return;
        }

        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->id();
            $table->integer('permission_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('fast_name', 150)->nullable();
            $table->string('last_name', 150)->nullable();
            $table->string('full_name', 250)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->text('profile')->nullable();
            $table->string('company_name', 200)->nullable();
            $table->text('address_line1')->nullable();
            $table->text('address_line2')->nullable();
            $table->string('postal_address', 250)->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->integer('city')->nullable();
            $table->integer('district')->nullable();
            $table->integer('division')->nullable();
            $table->integer('country')->nullable();
            $table->string('city_name', 200)->nullable();
            $table->timestamp('dob')->nullable();
            $table->string('gender', 10)->nullable();
            $table->boolean('status')->default(1)->comment('0=Inactive, 1=Active, 2=draft');
            $table->boolean('fetured')->default(0)->comment('0=no fetured, 1=Fetured');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('password_show', 191)->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->string('api_token', 100)->nullable();
            $table->string('device_key', 255)->nullable();
            $table->string('verify_code', 100)->nullable();
            $table->boolean('verify_code_status')->default(0);
            $table->timestamp('auth_activity_at')->nullable();
            $table->string('designation', 200)->nullable();
            $table->integer('branch_id')->nullable();
            $table->float('balance', 10, 2)->default(0.00);
            $table->boolean('subscriber')->default(0);
            $table->boolean('customer')->default(1);
            $table->boolean('business')->default(0);
            $table->boolean('employee')->default(0);
            $table->boolean('admin')->default(0);
            $table->bigInteger('addedby_id')->nullable();
            $table->timestamp('addedby_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unique(['email'], 'users_email_unique');
            $table->unique(['mobile'], 'mobile');
        });

        // keep the exact FLOAT columns of the original database (Laravel 10 creates DOUBLE)
        DB::statement('ALTER TABLE `users` MODIFY `balance` float(10,2) NOT NULL DEFAULT 0.00');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

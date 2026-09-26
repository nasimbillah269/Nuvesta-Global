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
        if (Schema::hasTable('media')) {
            return;
        }

        Schema::create('media', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->id();
            $table->bigInteger('src_id')->nullable();
            $table->boolean('src_type')->nullable()->default(0)->comment('0=media, 1=post, 2=category, 3=attribute, 4=Menus, 5=review, 6=Users 7=General 8=post Attribute, 9=Post Extra');
            $table->boolean('use_Of_file')->nullable()->default(0)->comment('0=media, 1=image, 2=banner, 3=gallery, 4=icon');
            $table->string('file_name', 255)->nullable();
            $table->string('file_rename', 100)->nullable();
            $table->string('alt_text', 255)->nullable();
            $table->string('caption', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('file_url', 191)->nullable();
            $table->string('file_size', 100)->nullable();
            $table->integer('file_type')->default(0)->comment('0=unknown, 1=image, 2=pdf, 3=doc 4=Zip, rar, 5 = Vedio, 6=audio');
            $table->string('file_path', 50)->nullable();
            $table->string('mine_type', 100)->nullable();
            $table->integer('drag')->default(0);
            $table->bigInteger('addedby_id')->nullable();
            $table->bigInteger('editedby_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};

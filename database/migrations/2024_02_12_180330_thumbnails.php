<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {  Schema::create('thumbnails', function (Blueprint $table) {
     $table->id();

      $table->string('main_img')->nullable();
      $table->string('img_2')->nullable();
      $table->string('img_3')->nullable();
      $table->string('phone_img')->nullable();
      $table->rememberToken();
      $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

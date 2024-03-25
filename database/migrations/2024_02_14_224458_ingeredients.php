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
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->longText('description');
            $table->string('combo1')->nullable();
            $table->string('combo2')->nullable();
            $table->string('combo3')->nullable();
            $table->string('combo4')->nullable();
            $table->string('combo5')->nullable();
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

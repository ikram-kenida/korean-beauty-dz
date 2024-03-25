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
        Schema::create('products', function (Blueprint $table) {

                $table->id();
                  $table->foreignId('category_id');
                $table->string('title');
                $table->text('description');
                $table->integer('price');
                $table->integer('stock');
                $table->integer('old_price')->nullable();
                $table->string('main_img');
                $table->string('img_2')->nullable();
                $table->string('img_3')->nullable();
                $table->string('img_4')->nullable();
                $table->string('statut');
                $table->string('type_de_peau');
                $table->string('ingredient')->nullable();
                $table->rememberToken();
                $table->timestamps();
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

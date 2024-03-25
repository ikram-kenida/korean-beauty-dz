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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Add user_id column
            $table->foreign('user_id')->references('id')->on('users'); // Create a foreign key reference to the users table
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('region');
            $table->string('nom');
            $table->string('prenom');
            $table->longText('address');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('livraison');
            $table->string('product_id');
            $table->string('product_img');
            $table->string('product_title');
            $table->float('total');
            $table->integer('quantity');
            $table->string('statut')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

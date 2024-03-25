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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Add user_id column
            $table->foreign('user_id')->references('id')->on('users'); // Create a foreign key reference to the users table
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('product_title')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

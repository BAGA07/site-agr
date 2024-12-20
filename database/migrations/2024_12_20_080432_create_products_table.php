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
            $table->string('name'); // Nom du produit
            $table->text('description')->nullable(); // Description
            $table->decimal('price', 8, 2); // Prix
            $table->integer('stock')->default(0); // Quantité en stock
            $table->string('image_path')->nullable(); // Chemin de l'image
            $table->timestamps();
            
            /* $table->unsignedBigInteger('category_id'); // Liaison avec une catégorie

            
            //Cles etrangere
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
         */});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

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
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('brand'); // Marca do produto
            $table->decimal('price', 10, 2); // Preço do produto deixei ela em decimal ao invés de float para evitar problemas de calculos como arredondamento.
            $table->integer('stock')->default(0); // Quantidade em estoque iniciada em zero
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

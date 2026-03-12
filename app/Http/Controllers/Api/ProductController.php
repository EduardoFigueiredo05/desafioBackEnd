<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Listando todos os produtos.
     */
    public function index()
    {
        return response()->json(Product::all(),200);
    }

    /**
     * Criando um novo produto.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'brand' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);
            $product = Product::create($validated);
            return response()->json($product, 201); // Retorna o produto criado com status 201 (Created)
        }

    /**
     * Mostrando um produto específico.
     */
    public function show(Product $product)
    {
        return response()->json($product,200);
    }

    /**
     * Atualizando um produto específico.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'brand' => 'sometimes|required|string|max:100',
            'price' => 'sometimes|required|numeric|min:0',
            'stock' => 'sometimes|required|integer|min:0'
        ]);

        $product->update($validated);
        return response()->json($product, 200);
    }

    /**
     * Apagando um produto específico.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}

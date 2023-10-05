<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Resources\ProductsResource;

class ProductsController extends Controller
{
    public function getProducts(){
        $products = Products::take(8)->get();
        if (!$products) {
            return response()->json(['success' => false, 'message' => 'No products']);
        }
        return response()->json(['success' => true, 'products' => ProductsResource::collection($products)]);
    }
    public function getProduct($id) {
        $product = Products::query()->find($id);
    
        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product does not exist']);
        }
    
        return response()->json(['success' => true, 'products' => new ProductsResource($product)]);
    }
}

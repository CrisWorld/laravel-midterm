<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id) {
        $product = Product::select('products.name as name', 'products.image as image', 'products.id', 'unit_price', 'type_products.name as type')
        ->join('type_products', 'products.id_type', '=', 'type_products.id')
        ->where('products.id', '=', $id)->first(); // Tìm sản phẩm dựa trên ID
        return view('pages.productdetail', ['product' => $product]);
    }

    public function search(Request $request) {
        $query = $request->input('query'); // Lấy từ khóa tìm kiếm từ input
        $products = Product::select('products.name as name', 'products.image as image', 'products.id', 'unit_price', 'type_products.name as type')->join('type_products', 'products.id_type', '=', 'type_products.id')
                        ->where('products.name', 'like', '%' . $query . '%')->get();
        return view('pages.search', ['products' => $products, 'query' => $query]);
    }
}

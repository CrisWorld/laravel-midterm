<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    public function getHome(){
        $products = Product::select('products.name as name', 'products.image', 'products.id', 'unit_price', 'type_products.name as type')
                        ->join('type_products', 'products.id_type', '=', 'type_products.id')
                        ->orderBy('products.id', 'desc')
                        ->get();
        return view('pages.home', ['products' => $products]);
    }
    public function getCart(){
        return view("pages.cart");
    }
}

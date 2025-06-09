<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        $totalProducts=$products->count();
        return view('pages.products-index', compact('products', 'totalProducts'));
      
    }
}

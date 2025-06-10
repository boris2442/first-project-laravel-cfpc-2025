<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $products=Product::all();
        $products = Product::orderBy('id', 'desc')->paginate(5);
        $totalProducts = $products->count();
        return view('pages.products-index', compact('products', 'totalProducts'));
    }

    public function create()
    {
        return view('pages.products-create');
    }
    public function store(Request $request)
    {
        $validation = $request->validate([

            "title" => "required|max:244",
            "category" => "required|max:244",
            "price" => "required|numeric|min:0",
        ]);


        // Product::create($request->all());//ici elle accepte tout
        Product::create($validation);
        return redirect()->route('products.index')->with('success','client add with successfull');
    }
}

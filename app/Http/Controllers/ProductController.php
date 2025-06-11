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
        $totalProducts = Product::count();
        return view('pages.products-index', compact('products', 'totalProducts'));
    }

    public function create() ///methode pour afficher le formulaire de creation
    {
        return view('pages.products-create');
    }
    public function store(Request $request) //Enregistre les données dans la base
    {
        $validation = $request->validate(
                [
                    "title" => "required|string|max:244",
                    "category" => "required|string|max:244|",
                    "price" => "required|numeric|min:0"
                ]
            );


        // Product::create($request->all());//ici elle accepte tout
        Product::create($validation);
        return redirect()->route('products.index')->with('success', 'client add with successfull');
    }
    public function edit(int $id)
    {
        $product = Product::findOrFail($id);
        return view('pages.products-edit', compact('product'));
    }
    public function update(Request $request, int $id)
    {
        $validation = $request->validate([
            "title" => "required|max:244",
            "category" => "required|max:244",
            "price" => "required|numeric|min:0",
        ]);
        $product = Product::findOrFail($id);   //recupere donne utilisateur

        $product->title = $validation['title'];
        $product->category = $validation['category'];
        $product->price = $validation['price'];
        // $product->update($request->all()); //ici elle accepte tout

        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }


    function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('error', 'Product deleted successfully');
    }
    // public function show(Product $product)
    // {
    //     return view('pages.products-show', compact('product'));
    // }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
// use App\Http\Controllers\ProductsExport;
use App\Http\Controllers\Controller;
use App\Exports\ProductsExport;

class ProductController extends Controller
{
    // Fdelete
    public function index()
    {

        $products = Product::orderBy('id', 'desc')->paginate(5);
        $totalProducts = Product::count();
        return view('pages.products-index', compact('products', 'totalProducts'));
    }

    private function formatCount($number)
    {
        if ($number >= 1000000) {
            return round($number / 1000000, 1) . 'M'; // Pour les millions
        }
        if ($number >= 1000) {
            // Logique pour déterminer la précision
            $divided = $number / 1000;

            // Si c'est un nombre rond (ex: 2000 → 2k)
            if ($number % 1000 === 0) {
                return $divided . 'k';
            }

            // Sinon on garde 1 décimale max (ex: 2250 → 2.25k)
            return number_format($divided, ($divided < 10) ? 2 : 1, '.', '') . 'k';
        }
        return $number; // Retourne tel quel si < 1000
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

    public function excel()
    {
        $fileName = now()->format('Y-m-d_H-i-s');
        return Excel::download(new ProductsExport, 'products_' . $fileName . '.xlsx');
    }
}

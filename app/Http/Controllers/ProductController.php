<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function display()
    {
        $products = Product::all()->orderBy('price', 'desc');
        return view('display', compact('products'));
    }
    public function index()
    {
        $products = Product::orderBy('price', 'desc')->get();
        // select * from products order by price desc
        return view('welcome', compact('products'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        Product::create($request->only(['name', 'description', 'price']));
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        Product::destroy($request->id);
        return redirect('/');
    }

}

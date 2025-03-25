<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request; // Corrected the namespace for Request

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'nullable |min:3',
            'size' => 'required|decimal:0,2|max:100'

        ]);

        Product::create($request->input());


        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function show(string $id)
    {
        dd($id);

        return view("products.show");
    }
}

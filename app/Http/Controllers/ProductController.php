<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Product::create($data);

        return redirect('/')->with('success', 'Product added successfully');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function transactions()
    {
        $transactions = Product::all(); 
        return view('transactions', compact('transactions'));
    }
}

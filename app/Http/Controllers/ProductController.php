<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $products= Product::all();
        return view('products.index')->with([
            'products'=> $products,
        ]);
    }

    public function create() {
        return view('products.create');
    }

    public function store($product) {
        //
    }

    public function show($product) {
        $product= Product::findOrFail($product);
        return view('products.show')->with([
            'product'=> $product,
            'subtitle'=>'<h2>Something about the product</h2>',
            ]);
    }

    public function edit($product) {
        return view('products.edit');
    }

    public function update($product) {
        //
    }

    public function destroy($product) {
        //
    }
}

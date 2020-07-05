<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('products.index');
    }

    public function create() {
        return view('products.create');
    }

    public function store($product) {
        //
    }

    public function show($product) {
        return view('products.show');
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

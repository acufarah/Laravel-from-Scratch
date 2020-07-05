<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return "This is the list of products FROM CONTROLLER";
    }

    public function create() {
        return "This is the form to create a new product FROM CONTROLLER";
    }

    public function store($product) {
        //
    }

    public function edit($product) {
        return "This is the form to edit product {$product} FROM CONTROLLER";
    }

    public function update($product) {
        //
    }

    public function destroy($product) {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        return view('createproduct');
    }

    public function store(Request $request){
        $name = $request->input('name');
        $img = $request->input('img');
        $description = $request->input('description');
        $price = $request->input('price');

        $product = new Product($name, $img, $description, $price);

        return view('product', ['product' => $product]);
    }

}

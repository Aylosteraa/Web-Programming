<?php

namespace App\Http\Controllers;
use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index(){
        $flowers = Flower::all();
        return view('cataloge', ['flowers' => $flowers]);
    }

    public function show($id){
        $flower = Flower::find($id);
        $categories = $flower->categories;
        $reviews = $flower->reviews()->orderBy('created_at', 'desc')->get();
        $search = array();
        foreach ($categories as $category){
            $search[]=($category->id);
        }
        $recommendations = Flower::where('id', '!=', $id)->
        whereHas('categories', function($query) use ($search){
            $query->whereIn('id', $search);
        })->limit(12)->get();
        $recommendationsSlides = $recommendations->chunk(4);
        return view('product', ['flower' => $flower,
            'categories'=>$categories,
            'reviews'=>$reviews,
            'recommendations'=>$recommendations,
            'recommendationsSlides'=>$recommendationsSlides
        ]);
    }
}

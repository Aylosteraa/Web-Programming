<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Flower;

class SearchController extends Controller
{
    public function find(Request $request){
        $search = $request->get('search');
        $flowers = Flower::where('name', 'like', '%' . $search . '%')->
            orWhereHas('categories', function($query) use ($search){
                $query->where('name', 'like', '%' . $search . '%');
        })->get();
        return view('search', ['flowers'=>$flowers, 'search'=>$search ]);
    }
}

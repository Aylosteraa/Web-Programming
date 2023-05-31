<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function find(Request $request){

        $flowers = Flower::query();

        if($request->filled('min') &&$request->filled('max')){
            $flowers->whereBetween('current_price', [$request->min, $request->max]);
        }
        if($request->filled('discount')){
            $flowers->where('discount', 1);
        }
        if($request->filled('new')){
            $flowers->where('new', 1);
        }
        if($request->filled('bestseller')){
            $flowers->orderBy('number', 'desc')
                ->limit(20);
        }
        if($request->filled('avail')){
            $flowers->andWhere('avail', 1);
        }
        if ($request->filled('sort')) {
            if($request->sort === 'rising'){
                $flowers->orderBy('current_price', 'asc');
            }else if ($request->sort === 'falling'){
                $flowers->orderBy('current_price', 'desc');
            }else{
                $flowers->orderBy('number', 'desc');
            }

        }
        $filterFlowers = $flowers->get();
        return view('cataloge', ['flowers'=>$filterFlowers]);
    }
}

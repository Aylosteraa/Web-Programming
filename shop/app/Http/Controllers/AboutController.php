<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;


class AboutController extends Controller
{
    public function index(){
        $bestsellers = Flower::orderBy('number', 'desc')
            ->limit(12)
            ->get();
        $discounts = Flower::where('discount', '1')
            ->limit(12)
            ->get();
        $news = Flower::where('new', '1')
            ->limit(12)
            ->get();
        $bestsellersSlides = $bestsellers->chunk(4);
        $discountsSlides = $discounts->chunk(4);
        $newsSlides = $news->chunk(4);
        return view('about', [
            'bestsellersSlides'=>$bestsellersSlides,
            'discountsSlides'=>$discountsSlides,
            'newsSlides'=>$newsSlides
            ]);
    }
}

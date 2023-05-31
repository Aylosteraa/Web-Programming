<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Flower;

class ReviewController extends Controller
{
    public function index($id){
        $flower = Flower::find($id);
        return view('review', ['flower'=>$flower]);
    }

    public function store(Request $request){
        $checkInput = $request->validate([
            'user_name' => 'required|max:200',
            'email' => 'required|email',
            'comment' => 'required',
        ]);
        $review = new Review();
        $review->flower_id = $request->input('flower_id');
        $review->user_name = $request->input('user_name');
        $review->email = $request->input('email');
        $review->comment = $request->input('comment');
        $review->save();
        return redirect()->action([FlowerController::class, 'show']);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function index(Request $request){

        $cart = Cart::where('id', session('cart_id'))->with('flowers')->first();

        if (!$cart) {
            $cart = new Cart;
            $cart->save();
            session(['cart_id' => $cart->id]);
        }

        if ($cart) {
            $flowers = $cart->flowers;
            $total = 0;
            foreach($flowers as $flower){
                if($flower->new_price){
                    $total += $flower->new_price;
                }else{
                    $total += $flower->price;
                }
            }
            return view('cart',
                [
                    'total'=>$total,
                    'flowers'=>$flowers,
                    'cart' => $cart
                ]);
        } else {
            return response()->json(['message' => 'Cart not found'], 404);
        }

    }

    public function store(Request $request){
        $flower_id = $request->input('flower_id');
        $cart = Cart::where('id', session('cart_id'))->first();

        if (!$cart) {
            $cart = new Cart;
            $cart->save();
            session(['cart_id' => $cart->id]);
        }

        if(($cart->flowers()->where('flower_id', $flower_id)->exists()) !== true){
            $cart->flowers()->attach($flower_id);
        }

        return redirect()->action([self::class, 'index']);
    }

    public function delete(Request $request){
        $cart_id=$request->input('cart_id');
        $flower_id=$request->input('flower_id');;
        $cart = Cart::find($cart_id);
        $cart->flowers()->detach($flower_id);
        return back();
    }
}

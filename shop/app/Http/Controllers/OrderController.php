<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request){
        $cart_id=$request->input('cart_id');
        $total_price=$request->input('total_price');
        $cart=Cart::find($cart_id);
        $flowers=$cart->flowers;
        return view('order', [
            'cart_id' => $cart_id,
            'total_price' => $total_price,
            'flowers' => $flowers
        ]);
    }

    public function store(Request $request){

        $checkInput = $request->validate([
            'date' => 'required|date_format:d/m/Y H:i',
            'name' => 'required|max:200',
            'surname' => 'required|max:200',
            'phone_number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        $date = $request->input('date');
        $datetime = date_create_from_format('d/m/Y H:i', $date);
        $datetime->getTimestamp();

        $order = new Order();
        $order->cart_id = $request->input('cart_id');
        $order->name = $request->input('name');
        $order->surname = $request->input('surname');
        $order->phone_number = $request->input('phone_number');
        $order->email = $request->input('email');
        $order->day = $datetime;
        $order->address = $request->input('address');
        $order->delivery_id = $request->input('delivery_id');
        $order->payment_id = $request->input('payment_id');
        $order->total_price = $request->input('total_price');
        $order->save();

        $request->session()->forget('cart_id');
        return redirect()->action([AboutController::class, 'index']);
    }
}

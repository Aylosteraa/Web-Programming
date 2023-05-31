<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function delivery(){
        return $this->belongsTo(Delivery::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}

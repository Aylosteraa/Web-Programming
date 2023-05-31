<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    public function flowers(){
        return $this->belongsToMany(Flower::class);
    }

    public function order(){
        return $this->hasOne(Order::class);
    }
}

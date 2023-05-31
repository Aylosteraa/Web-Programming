<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $table = 'flowers';

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function carts(){
        return $this->belongsToMany(Cart::class);
    }
}

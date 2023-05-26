<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    public $timestamps = false;

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function publishHouses(){
        return $this->belongsToMany(PublishHouse::class);
    }
}

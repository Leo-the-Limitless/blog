<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function productComments() {
        return $this->hasMany('App\Models\ProductComment');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}

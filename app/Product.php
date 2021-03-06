<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productimages(){
        return $this->hasMany('App\ProductImage');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->hasMany('App\Tag');
    }

    public function favorite()
    {
        return $this->belongsTo('App\Favorite');
    }
}

<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Cart;


class Client extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $guarded = [];


    public function address( ){ 
        return $this->hasMany(Address::class); 
    }

    public function orders( ){ 
        return $this->hasMany(Order::class); 
    }

    public function carts( ){ 
        return $this->hasMany(Cart::class); 
    }

    public function reviews( ){ 
        return $this->hasMany(Review::class); 
    }

    public function favourites( ){ 
        return $this->hasMany(Favourite::class); 
    }
}

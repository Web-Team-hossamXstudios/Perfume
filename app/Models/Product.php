<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    use HasFactory ;
    protected $guarded = [];

    public function supcategory( ){ 
        return $this->belongsTo(Supcategory::class); 
    }

    public function orderItem( ){ 
        return $this->belongsTo(OrderItem::class); 
    }

    public function cartItem( ){ 
        return $this->belongsTo(CartItem::class); 
    }
    
    public function reviews( ){ 
        return $this->hasMany(Review::class); 
    }

    public function favourites( ){ 
        return $this->hasMany(Favourite::class); 
    }

}

<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    use HasFactory ;
    protected $guarded = [];

    public function products( ){ 
        return $this->hasMany(Product::class); 
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
     //get favourites by id
    public function show(){
        $favourites = Favourite::where('client_id', auth('api')->user()->id);
        return response()->json
        (['favourites' => $favourites ]);
    }

    //store favourites by id
    public function store(Request $request){
        $request->validate([
            "rating"=>"required",
            "comment"=>"required",
        ]);
        
        Favourite::create([
            "client_id"=>auth('api')->user()->id,
            "product_id"=> $request->product_id,
        ]);
        return response()->json
        (['message' => 'Review created successfully']);
    }
        
}

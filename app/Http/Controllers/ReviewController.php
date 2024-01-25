<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    //get reviews by id
    public function show(){
        $reviews = Review::where('client_id',auth()->user()->id->first());
        return response()->json
        (['reviews' => $reviews ]);
    }
    
    // add reviews
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'comment' => 'required|string',
        ]);
        $category = Review::create($date);
        return response()->json([
            'msg' => 'Sucsses'
        ],
        201
    );
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //get all products
    public function index(){
        $products = Product::all();
        return response()->json
        (['Products' => $products]);
    }

    //get product by id
    public function show($id){
        $product = Product::find($id);
        return response()->json
        (['Product' => $product ]);

    }

}

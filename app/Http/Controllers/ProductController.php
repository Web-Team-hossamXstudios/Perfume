<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        //get all products
        $products = Product::all();
        return response()->json($products,200,['all products']);

    }

}

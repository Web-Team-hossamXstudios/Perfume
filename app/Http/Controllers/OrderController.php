<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request ,$id){

        $order = new Order();
        $order->client_id = $request->user()->id;
        $order->promocode_id = $request->user()->id;
        $order->total_price = $request->total_price;
        $order->quantity = $request->quantity;
        $order-> status = "pending";

//
//
//        $order=Order::create([
//            "client_id"=>$request->user()->id,
//            "promocode_id"=>$request->user()->id,
//            "quantity"=>$counts++,
//            "total_price"=>$price,
//            "status"=> ,
//        ]);
        if ( $order->save()){
            foreach ($request->cart_items as $item)
                $order_item = new OrderItem();
            $order_item->order_id = $order->id;
            $order_item->product_id = $item->product_id;
            $order_item->quantity = $item->quantity;
            $order_item->price = $item->price;

//
//            $orderitems= OrderItem::create([
//                "product_id"=>$request->product_id,
//                "order_id"=>$id,
//                "quantity"=>$request->quantity,
//                "price"=>$product->price* $request->quantity,
//            ]);
        }
        return response()->json([
            "order"=> $order,
            "orderItems"=> $order_item
        ]);
    }
    public function delete(Order $order)
    {
        $order->delete();
        return response()->json(null, 204);
    }

}

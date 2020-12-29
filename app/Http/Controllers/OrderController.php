<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;


class OrderController extends Controller
{
    public function order(Request $request){

		$order = Order::create([
			'user_id' => $request->get('userId'),
			'address' => $request->get('address'),
			'first_name' => $request->get('firstName'),
			'last_name' => $request->get('lastName'),
			'status' => 1,
			'total' => 0
		]);
		
		foreach ($request->get('items') as $item){
			OrderDetail::create([
				'order_id' => $order->id,
				'name_product' => $item['name'],
				'amount' => $item['amount'],
				'quantity' => $item['value'],
			]);

		}
   		return response()->json(['status'=>"OK"]);

	}


	public function getListOrder(Request $request){
		$orders = Order::where('user_id', $request->get('userId'))->get();
		if(count($orders) <= 0) {
			return response()->json(['status' => false]);
		}
        return response()->json(['status'=> true, 'order' => $orders]);
	}
}

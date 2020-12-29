<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request){
		return response()->json(['key'=>$request->all()]);
		$orders = json_decode($request);
		$user_id = $request->userId;
		$current_user = User::find($user_id);
		$order = DB::table('orders')->insert([
			['user_id' => $request->get('userId')],
			['address' => $request->get('address')],
			['firstName' => $request->get('firstName')],
			['lastName' => $request->get('lastName')],
			['status' => 1],
		]);
		// $order->user_id = $request->get('userId');
		// $order->address = $request->get('address');
		// $order->firstName = $request->get('firstName');
		// $order->lastName = $request->get('lastName');
		// $order->status = 1;
		// $order->save();
		foreach ($orders->cart as $iteam){
			$order = DB::table('order_details')->insert([
			['order_id' => $request->get('id')],
			['name_product' => $request->get('name')],
			['amount' => $request->get('amount')],
			['quantity' => $request->get('quantity')],
		]);
		}
   // return response()->json(['status'=>"OK"]);

	}


	public function getListOrder(){
		$orders = Order::all();
        return response()->json(['status'=> $orders]);
	}
}

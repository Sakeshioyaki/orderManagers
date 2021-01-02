<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class OrderController extends Controller
{
    public function order(Request $request){

		$order = Order::create([
			'user_id' => $request->get('userId'),
			'address' => $request->get('address'),
			'first_name' => $request->get('firstName'),
			'last_name' => $request->get('lastName'),
			'status' => 1,
			'total' => 0,
			'created_at' => date('Y-m-d'),
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


	public function getListOrder(){
		$orders = Order::all();
		return view('listOrder', compact('orders'));
	}

	public function orderDetail($order_id){
		$detail = DB::table('order_detail')
					->join('orders','orders.id','=','order_detail.order_id')
					->where('orders.id','=',$order_id)
					->select('order_detail.name_product','order_detail.amount','order_detail.quantity', 'order_detail.id')
					->get();
		return view('show_order', compact('detail'));
	}
}

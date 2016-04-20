<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\Order_Detail;

class Order extends Model
{
    protected $table = 'orders';

    public static function getAll() {
		$result = Order::all();
		foreach ($result as $order) {
			$supplier = Supplier::where('id', $order->supplier_id)->first();
			if ($supplier != NULL) $order->supplier = $supplier->name;
			$order->total = Order_Detail::getTotalMoney($order->id);
		}
		return $result;
	}
}

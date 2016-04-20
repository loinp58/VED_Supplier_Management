<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order_details';

    public static function getTotalMoney($orderId) {
		$orderProducts = Order_Detail::where('order_id', $orderId)->get();
		$sum = 0;
		foreach ($orderProducts as $orderProduct) {
			$sum += $orderProduct->total;
		}
		return $sum;
	}
}

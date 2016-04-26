<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrdersController extends Controller
{
    public function index()
    {
    	$orders = Order::paginate(5);
    	return view('order.index', compact('orders'));
    }
}

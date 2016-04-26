<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\RequestOrder;
use App\Models\RequestOrder_Detail;
use Carbon\Carbon;

class RequestOrdersController extends Controller
{
    public function index()
    {
    	$requestOrders = RequestOrder::paginate(5);
    	return view('request_order.index', compact('requestOrders'));
    }

    public function show($id)
    {
    	$requestOrder = RequestOrder::find($id);
    	return view('request_order.show', compact('requestOrder'));
    }

    public function create()
    {
    	return view('request_order.create');
    }

    public function store(Request $request)
    {
    	$reqOrder = RequestOrder::create($request->except('productList'));
    	$reqOrder->create_day = Carbon::now();
    	$reqOrder->status_complete = "Wating confirm";
		$reqOrder->save();
    	return redirect()->route('request_order.index');
    }

    public function edit($id)
    {
    	$requestOrder = RequestOrder::find($id);
    	return view('request_order.edit', compact('requestOrder'));
    }

    public function update(Request $request, $id)
    {
    	# code...
    }

    public function destroy($id)
    {
    	RequestOrder_Detail::where('request_order_id', $id)->delete();
    	RequestOrder::find($id)->delete();
    	return redirect()->route('request_order.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Supplier;
use App\Models\Order;
use App\Models\Product;
use Response;

class SuppliersController extends Controller
{
    public function index()
    {	
        $suppliers = Supplier::paginate(5);
        foreach ($suppliers as $supplier) {
            $supplier->count = Order::getAll()->where('supplier_id', $supplier->ID)->count();
        }
        return view('supplier.index', compact('suppliers'));
    }

    public function show($id)
    {
        $supplier = Supplier::find($id);
        $products = Product::where('supplier_id', $id)->paginate(5);
        return view('supplier.show', compact('supplier', 'products'));
    }

    public function create()
    {
    	return view('supplier.create');
    }

    public function store(Request $request)
    {
    	Supplier::create($request->except('_method', '_token'));
    	return redirect()->route('supplier.index');
    }

    public function edit($id)
    {
    	$supplier = Supplier::find($id);
    	return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
    	$supplier = Supplier::find($id);
    	$supplier->update($request->except('_method', '_token'));
    	return redirect()->route('supplier.index');
    }

    public function destroy($id)
    {
        Product::where('supplier_id', $id)->delete();
        Supplier::find($id)->delete();
        return redirect()->route('supplier.index');
    }

    public function orderShow($supplier_id)
    {
        $supplier = Supplier::find($id);
        $orders = Order::where('supplier_id', $supplier_id)->paginate(5);
        return view('supplier.show', compact('supplier', 'products'));
    }
}

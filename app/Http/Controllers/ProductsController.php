<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Product;
use App\Models\Supplier;
use Response;

class ProductsController extends Controller
{
    public function create($supplier_id)
    {
        $supplier = Supplier::find($supplier_id);
        return view('supplier.product.create', compact('supplier'));
    }

    public function store(Request $request, $supplier_id)
    {
        Product::addItem($request, $supplier_id);
        return redirect()->route('supplier.show', $supplier_id);
    }

    public function edit($supplier_id, $product_id)
    {
        $supplier = Supplier::find($supplier_id);
        $product = Product::find($product_id);
        return view('supplier.product.edit', compact('supplier', 'product'));
    }

    public function update(Request $request, $supplier_id, $product_id)
    {
        $product = Product::find($product_id);
        $product->update($request->except('_method', '_token'));
        return redirect()->route('supplier.show', $supplier_id);
    }

    public function destroy($supplier_id, $product_id)
    {
        # code...
    }

    public function destroyAll($supplier_id)
    {
    	Product::where('supplier_id', $supplier_id)->delete();
    	return redirect()->route('supplier.show', $supplier_id);
    }
}

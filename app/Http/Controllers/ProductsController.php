<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Product;
use App\Models\Supplier;
use Response;

class ProductsController extends Controller
{
    public function index($supplier_id)
    {
    	$products = Supplier::find($supplier_id)->products;
    	return Response::json($products);
    }
}

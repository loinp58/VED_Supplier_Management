<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Supplier;
use Response;

class SuppliersController extends Controller
{
    public function index()
    {
    	$suppliers = Supplier::all();
    	return Response::json($suppliers);
    }
}

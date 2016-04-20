<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
    	'code',
    	'name',
    	'description',
    	'note'
    ];

    public function supplier()
    {
    	return $this->belongsTo('App\Models\Supplier');
    }

    public static function addItem($request, $supplier_id)
    {
    	$file = $request->file('Products');
    	if (!empty($file)) {
    		$data = Excel::load($file)->get();
			foreach ($data as $row) {
				$product = new Product;
				$product->supplier_id = $supplier_id;
				if ($row->code != NULL ) $product->code = $row->code;
				if ($row->name != NULL ) $product->name = $row->name;
				if ($row->description != NULL ) $product->description = $row->description;
				if ($row->note != NULL ) $product->note = $row->note;
				$product->save();
			}
    	}

    	else {
    		$product = Product::create($request->except('_method', '_token'));
    		$product->supplier_id = $supplier_id;
    		$product->save();
    	}
    }
}

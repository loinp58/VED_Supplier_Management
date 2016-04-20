<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $fillable = [
    	'code',
    	'name',
    	'person_contact_name',
    	'phone',
    	'address',
    	'fax',
    	'note'
    ];

    public function products()
    {
    	return $this->hasMany('App\Models\Product');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestOrder extends Model
{
    //
    protected $table = 'request_orders';

    protected $fillable = [
    	'code', 'department', 'user_id', 'create_day', 'status_complete', 'deadline_payment', 'note'
    ];
}

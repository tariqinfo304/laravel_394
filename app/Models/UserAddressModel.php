<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddressModel extends Model
{
	protected $table = "user_address";
	public $timestamps = false;  

    public function user()
    {
        return $this->belongsTo('App\Models\UsersModel');
    }
}

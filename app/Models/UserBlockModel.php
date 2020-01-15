<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBlockModel extends Model
{
     protected $table = "user_block_history";
     protected $primaryKey = "history_id";  

     public $timestamps = false;



     function user()
     {
     	return $this->belongsTo("App\Models\UsersModel","user_id");
     }
}

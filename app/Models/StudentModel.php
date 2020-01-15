<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
     protected $table = "students";
     public $timestamps = false; 



    function books()
   	{
   		//many-to-many relations requires the presence of an intermediate table
   		return $this->belongsToMany("App\Models\BooksModel","book_std","std_id", "bk_id");
   	}
}

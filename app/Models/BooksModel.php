<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
     protected $table = "books";
     protected $primaryKey = "book_id";  


    function students()
   	{
   		//many-to-many relations requires the presence of an intermediate table
   		return $this->belongsToMany("App\Models\StudentModel","book_std","bk_id","std_id");
   	}
}

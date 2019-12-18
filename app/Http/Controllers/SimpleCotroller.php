<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleCotroller extends Controller
{
    function simple()
    {
    	$arr= [1,2,3,4,5];
    	return view("lec_14_1",["data"=>"evs","arr" => $arr]);
    }

    function parent()
    {
    	return view("lec_14_parent",["title"=>"Home","content"=>"Home body content"]);
    }

    function child()
    {

        $arr = [
            "name" => "evs",
            "id"    => 123,
            22,
            23,
            2
        ];



    	return view("lec_14_child",
    			[
                "boolean" => true,
                "name" => "Child View",
                "users" => [1,2,3],
                "json_arr" => json_encode($arr), 
    			"title"=>"Child",
    			"content"=>"Child body content",
    			"error" => "Database Error",
    			"heading" => "Database"]);
    }
}

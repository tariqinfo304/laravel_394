<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdvanceDBController extends Controller
{
    
    function db()
    {

    	/*
    	//simple fetching//
    	$res = DB::table("users")
    			->select('id','name')
    			->where("id",1)
    			->get();
    	*/

    	/*
    	//One-To-One

    	$res = DB::table("users")
    			->join("user_address","users.id","=","user_address.user_id")
    			//->Leftjoin("user_address","users.id","=","user_address.user_id")
    			->select("users.name","user_address.address_1","user_address.address_2")
    			->get();
		
		*/
    			
    	/* 		                  
    	//One-To-Many
    	$res = DB::table("users")
    			 ->join("user_block_history","users.id","=","user_block_history.user_id")
    			 ->Leftjoin("user_address","users.id","=","user_address.user_id")
    			 ->select("users.name","user_address.address_1","user_address.address_2")
    			 ->get();
		
		*/
    	

    	/*
    	//Many-To-Many
    	$res = DB::table("books")
    			->join("book_std","books.book_id","=","book_std.book_id")
    			->join("students","students.id","=","book_std.student_id");
    			
    			//->select("books.name as book_name","students.name as std_name")
    			//->get();


    	$res = $res->addSelect("books.name as book_name");
    	$res = $res->addSelect("students.name as std_name");

    	$res = $res->get();


    	dd($res);
    	*/

    }
}

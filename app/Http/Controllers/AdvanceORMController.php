<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BooksModel;
use App\Models\StudentModel;
use App\Models\UserAddressModel;
use App\Models\UserBlockModel;
use App\Models\UsersModel;



class AdvanceORMController extends Controller
{

	function orm()
	{
		//$this->one_to_one();
		//$this->one_to_many();

		$this->many_to_many();


	}



    function one_to_one()
    {
    	echo "<pre>";
    	
    	//Direct Relationship	
    	/*
        
    	$user = new UsersModel();
    	$user = $user->find(1)->address;
    	
    	dd($user);
		*/
    	
    	//inverse Relationship
    	$address = new UserAddressModel();
    	$user = $address->find("1")->user;
		

    	dd($user);
    }

    function one_to_many()
    {
    	
    	//direct 
    	
    	/*
        
    	$obj = new UsersModel();
    	$obj = $obj->find(1)->block_history;
    	dd($obj);

        */

        
    	//inverse
        
    	$obj = new UserBlockModel();
    	$obj = $obj->find(1)->user;
        dd($obj);
            	
    }

    function many_to_many()
    {
    	echo "<pre>";

    	//direct//
    	/*
        
    	$obj = new StudentModel();
    	$books = $obj->find(1)->books;


    	dd($books);

    	*/

    	//die();

        

        
    	
    	//inverse//

    	$book = new BooksModel();
    	$std_list= $book->find(1)->students;


    	dd($std_list);



        
    }


    function eager_loading()
    {

    	$post = new PostModel();
    	
    	DB::enableQueryLog(); 

    	/*
    	$post_list = $post->all();
    	foreach ($post_list as $row) {
    		//echo "POST Title : " . $row->title;
    		//echo "<br/>";
    		foreach ($row->comments as $c_row) {
    			//echo $c_row->user_id ." :: " . $c_row->description;
    			//echo "<br/>";
    		}
    	}
    	*/
    	$post_list = $post->with('comments')->get();
		foreach ($post_list as $book) {
		    //echo $book->comments;
		}


    	dd(DB::getQueryLog());
    }
}

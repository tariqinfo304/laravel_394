<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\BooksModel;

class ORMController extends Controller
{
    function orm_index()
    {

    	$orm = new UsersModel();

    	echo "<pre>";

    	
  
    	//print_r($orm);
    	
    	

    	//$data = $orm->all();

    	//$data = $orm->where(["id"=> 1])->get();

    	//$data = $orm->orwhere(["id"=> 1 ,"username"=>""])->get();
    	//$data = $orm->first();
    	
    	//$data = $orm->all();

    	//print_r($orm->find(1));
    	//print_r($orm->findOrFail(10));

    	/*
    	
    	foreach ($data as $UsersModel) {
    		//print_r($UsersModel);
    		echo $UsersModel->name."<br/>";
    	}*/
    	
    	//dd($data);


    	//save //
    	

    	
    	/*
    	$orm->name="Usama & Shahid";
    	$orm->username="shahid@gmail.com";
    	$orm->password ="121";
	
		//return type is boolean
    	var_dump($orm->save());
		*/

    	//update//
    	
    	/*
    	$data = $orm->find(1);
    	$data->username = "xyz@gmail.com";
    	var_dump($data->save());
		
		*/


    	/*
		//remove//

		$data = $orm->find(1);
		var_dump($data->delete());
		*/




        //print_r($orm);

       /* 
        ///////////DEstroy method ( delete record from table without fetching  from DB )
        $res = UsersModel::destroy(1);
        var_dump($res);
    */

        //Soft Deleting

        $data = $orm->find(2);
        //soft delete beacuse of trait use in orm model
        //var_dump($data->delete());
        

        //permanent remove frmo db
        //$data->forceDelete()
		/*

		//Class Work done by Students
		//06-Jan-2020

		$book = new BooksModel();

		//$book->name = "xyz";
		//$book->save();
		$data = $book->all();
		echo "<pre>";
		print_r($data);




		//end 06-Jan-2020 //
		*/




    }
}

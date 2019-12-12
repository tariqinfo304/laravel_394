<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function test(Request $req)
    {
    	//dd($req);
    	
    	//dd($req->input());

    	dd($req->name);
    	echo "TestController Method test is run";
    }

    function test_param($id,$name=NULL)
    {
    	echo $id . " :: " . $name;
    }
}

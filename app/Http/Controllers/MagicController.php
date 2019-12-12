<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagicController extends Controller
{
    
    function __invoke()
    {
    	echo "Invoke MAgic method";
    }


    function show()
    {
    	echo "show";
    }
}

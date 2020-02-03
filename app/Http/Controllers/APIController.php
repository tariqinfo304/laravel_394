<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Models\UsersModel;
use App\Http\Resources\UserCollection;

class APIController extends Controller
{
    function show()
    {
    	//return new UserResource(UsersModel::find(1));

    	//return UserResource::collection(UsersModel::all());

    	//return UserResource::collection(UsersModel::all()->keyBy->email);
    	//customize the resource collection response
    	return new UserCollection(UsersModel::all());
    }
}

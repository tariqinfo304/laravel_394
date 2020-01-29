<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use App\Models\UsersModel;

class LoginController extends Controller
{
   	
   	function login()
   	{
   		return view("shop.login");
   	}
   	function login_validate(Request $request)
   	{

        /*
            Encrypted values are passed through serialize during encryption, which allows for encryption of objects and arrays. 
        
        //WE CAN PASS OBJECT AND ARRAY TO THI SFUNCTION 
           // encrypt(["123","@3"]);
            //decrypt
        */
      //  $user = new UsersModel();	
       	/*
        $encrypted =  encrypt("admin");
        echo  $encrypted ."</br>";
        dd(decrypt($encrypted));
    	*/

        /*
        $encrypted =  encrypt($user);
        echo  $encrypted ."</br>";
        
        dd(decrypt($encrypted));
        */

        
        
        /*
        $encrypted =  Crypt::encryptString("admin");
        echo Crypt::decryptString($encrypted);
        die();
        */
        
        
        
       	/*
        $hash_string = Hash::make("admin");
        

        echo $hash_string;
        
        echo "<br/>";

        var_dump(Hash::check('admin', $hash_string));
        
        
    	die();
        */

  		$validator = Validator::make($request->all(), [
            'username' => 'required|min:4|max:25',
            'password' => 'required|min:3',
        	]);

  		  if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }


        $user = UsersModel::where("username",$request->username)->first();

        if(!empty($user) && Hash::check($request->password, $user->password))
        {
          	session(['username' => $user->username,"id" => $user->id]);
        }
        else
        {
           return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }

        return redirect("/shop");
   	}

   	function logout()
   	{
   		session()->forget("username");
  		session()->flush();
  		return redirect("login");
   	}
}

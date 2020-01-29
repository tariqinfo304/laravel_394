<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;
use App\Http\Requests\AddSopRequest;
use Illuminate\Support\Facades\Validator;


class ShopController extends Controller
{
    function index(Request $req)
    {
       // dd(session()->all());
       // dd($req->session()->get("username"));
       //  dd($req->session()->all());
    	return view("shop/index");
    }


    function shop_page()
    {
    	$shop = new ShopModel();

    	return view("shop/shop",["shop_list" => $shop->all()]);
    }


    function shop_edit(int $id)
    {
        $shop = ShopModel::find($id);

    	return view("shop/shop_edit",["shop" => $shop]);
    }

    function shop_delete(int $id)
    {
    	 $shop = new ShopModel();
         $shop = $shop->find($id);
         $shop->delete();

         return redirect("show_shop");
    }

    function shop_update(Request $req)
    {
        $req->id = (int)$req->id;
        if(!empty($req->id) && gettype($req->id) == "integer")
        {
                $shop = new ShopModel();
                $shop = $shop->find($req->id);

                $shop->name = $req->name;
                $shop->owner_name = $req->owner_name;
                $shop->save();
        }
        return redirect("show_shop");
    }

    function shop_add_form()
    {
        return view("shop/shop_add");
    }

    //Request 
    //AddSopRequest
    function shop_save(AddSopRequest $request)
    {


        /*
       // dd($request->file_attach);

        //file uploading//

              
                $file = $request->file('file_attach');
                    
                //dd( $file);

                //it will create symbolic link in public folder
                //php artisan storage:link


            //    echo $request->file_attach->path();
                //echo "<br/>";
              //  var_dump($request->file_attach->extension()). "<br/>";
        
             //   die("ok");
                
               // $path = $request->file_attach->store("images");

                $ext =  $request->file_attach->extension();
                $name = "file_".rand().".".$ext;
\
//it will save file in storage but can access now 
        //$path = $request->file_attach->storeAs("images",$name ,"public");
          //      die( $path);


            //it will return full path of file
                echo asset('storage/images/file_653096828.jpeg');
    


        */


        //1 way//
        //validation
                /*
        $validatedData = $request->validate([

            'name' => 'required|min:10',
            'address' => 'required',
        ]);
        */
        
        //2 way to check in RQuest fodler anme of this method validation//
      // $res = $request->validated();
        //return validated values 
        // dd($res);

        /*

        //Manually Creating Validators
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'address' => "required|max:5"
        ]);


        if ($validator->fails()) {
            return redirect('shop_add')
                        ->withErrors($validator)
                        ->withInput();
        }
        */




         $shop = new ShopModel();

         $shop->name = $req->name;
         $shop->owner_name = $req->owner_name;
         $shop->address = $req->address;
         $shop->opening_time = $req->opening_time;
         $shop->closing_time = $req->closing_time;


         $shop->save();

         return redirect("show_shop");

    }


}

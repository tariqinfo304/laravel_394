<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;

class ShopController extends Controller
{
    function index()
    {
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


    function shop_save(Request $req)
    {
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

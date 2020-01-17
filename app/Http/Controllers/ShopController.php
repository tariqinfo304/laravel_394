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
    	echo "Edit : $id";
    }

    function shop_delete(int $id)
    {
    	echo "Remove : $id";
    }
}

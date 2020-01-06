<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//0300-4539628
//arha
Route::get('/', function () {
    echo "Welcome Home Page";
});

//single
Route::get("form_application/{user_id}",function($id){

	echo "User REgisttraion Form : ".$id;
});

//double param in route
Route::get("/get_user/{id}/user/{name}",function(int $id,string $name){


	echo "Id : ". $id . "  => Name  : " . $name;
});


//optional//

Route::get("/get_bike/{bike_no?}",function(int $no=777){

	echo $no;
});



//Route Validation//

Route::get("list/{id}",function($no){

	echo "Roll No list  : " . $no;

})->where(["id" => "[1-9]{2}000[0-9]+"]);
//->where(['id' => '[1-5]+']);
//->where(['id' => '123|222|333','name' => "[a-zA-Z-0-9-' '-'!']+"]);
//->where(["id" => "[1-5]{4}","name" => "[a-z]+"]);
//25202-0340608-9
//->where(["id" => "[0-9]{5}-[0-9]{7}-[0-9]{1}"]);


 //Encoded Forward Slashes
Route::get('search/{search}', function ($search) {
    echo "Search Route " .$search;
})->where('search', '.*');



Route::redirect("/get_search","search/2323");



Route::any("/method",function(){

	echo "Method allow GET,PUT,POST,DELETE";
});

Route::match(['get','put','post','delete'],"/method",function(){

	echo "Method allow GET,PUT,POST,DELETE";
});




//name route

/////////////////////////////////////////////
//Named Routes
Route::get("/user/info",function(){

	echo "It's a name route ";
})->name("info");


Route::get("delete/{id}",["as" => "Remove",function($id){
		echo "ok";
}]);


Route::get("/call_profile",function(){
	return redirect()->route("info");
});




Route::get('user/{id}/profile', function ($id) {
    echo "It's a name route with parameter id  : " . $id ;
})->name('profile');

Route::get("check_name_route/{id}",function($id){

	//echo route("info"); 
//	return redirect()->route("info");
	return redirect()->route("profile",["id"=>$id]);
});



/////////////////////////////////
//Route Groups
////////////////////////////////


Route::group(["prefix" => "admin/"],function($id){

	Route::get("delete/{id}",function($id){
		echo "route-group  => user/delete : " .$id;
	});

	Route::get("update/{id}",function($id){

		echo "route-group => user/info : " . $id;
	});
});




Route::group(["prefix" => "user/{id}","as" => "UserInfo/"],function($id){

	Route::get("delete",["as" => "Remove",function($id){
		echo "route-group  => user/delete : " .$id;
	}]);

	Route::get("update",["as" => "Edit" ,function($id){

		echo "route-group => user/info : " . $id;
	}]);
});



Route::get("redirect_group/{id}",function($id){

	return redirect()->route("UserInfo/Remove",["id"=>$id]);
});


/*

Route::fallback(function () {
    echo "NULL Return";
});

*/



////////////////////////////////
///////////// Controler////////
///////////////////////////////




////////////
///Simple controller//
//Route::get("test",function(){ echo "test"; });
Route::get("test/{name}","TestController@test");
//param
Route::get("param/{id}/{username?}","TestController@test_param");

//Folder controller
Route::get("report","Student\ReportingController@report");



//Magic __invoke method call //
Route::get("m1","MagicController");
Route::get("m2","MagicController@show");
Route::get("m3/{id}","MagicController");



//Resource Controllers
Route::resource("crud","CRUDController");

//Partial Resource Routes
//Route::resource("crud","CRUDController")->only(['index','destroy']);
//Route::resource("crud","CRUDController")->except(['destroy']);




////////////////////////////////
////////////////// View ///////
///////////////////////////////

Route::get("view_1","SimpleCotroller@simple");
Route::get("view_parent","SimpleCotroller@parent");
Route::get("view_child","SimpleCotroller@child");



///////////////////////////////////////
//////////////////// DB ///////////////
///////////////////////////////////////

Route::get("db","DBController@db_index");

///////////////////////////////////////
//////////////////// ORM ///////////////
///////////////////////////////////////
Route::get("orm","ORMController@orm_index");
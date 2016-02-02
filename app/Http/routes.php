<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('user/login',['as'=>'login',function(){
   //return redirect()->route('/');

   return '用户登录';

}]);

Route::get('user/profile',function(){
   return redirect()->route('login');
});



//前台
Route::group(['prefix'=>'Home', 'namespace' => 'Home'], function(){

    Route::get('index', 'IndexController@index'); //首页控制器
    Route::Controller('center-index', 'MyCenterController'); //

});

//后台
//前台
Route::group(['prefix'=>'Admin', 'namespace' => 'Admin'], function(){

    Route::Controller('login', 'LoginController'); //
    // Route::get('login','LoginController@Login');
   // Route::get('index', 'IndexController@index'); //首页控制器

});



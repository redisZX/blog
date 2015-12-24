<?php
/*
 * 登录模块
 *
 * */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
class LoginController extends Controller
{

    //判断是否已经登录
    public function __construct()
    {
        //echo checkLogin();


    }//__construct End


    //Admin 管理用户登录接口
    public function Login()
    {

       //URL::action('Admin\IndexController@index');
       return view('Admin.Login.Login');



    }//Login End





}//End Class

















?>
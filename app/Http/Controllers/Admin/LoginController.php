<?php
/*
 * 登录模块
 *
 * */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Requests;
class LoginController extends Controller
{

    //判断是否已经登录
    public function __construct()
    {
        //echo checkLogin();


    }//__construct End


    //Admin 管理用户登录接口
    public function getIndex()
    {

       //URL::action('Admin\IndexController@index');
       return view('Admin.Login.Login');



    }//Login End

    //验证登录信息
    public function postSelectAdminName(Request $request)
    {
       $admin_name = trim($request->get('admin_name'));
       $admin_pass = trim($request->get('admin_pass'));
       if((!$admin_name)||(!$admin_pass)){
           echo json_encode(array('result'=>'NO_NAME_OR_PASS'));
           exit;
       }




    }





}//End Class

















?>
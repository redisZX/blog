<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lib\LibWexinJssdk;
/*
 * blog 后台控制器
 * */
class IndexController extends Controller
{

    //首页控制器
    public function index()
    {


        return view('Home.Index.index',[
            'title'=>'我好想你。。。。。。。。。',

        ]);

    }
    //登录
    public function login()
    {
       checkLogin();
       echo "<br/>";
       $Wecat = new LibWexinJssdk();
       $share = $Wecat->test();
    }





}










?>
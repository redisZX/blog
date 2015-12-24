<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/*
 * blog 首页控制器
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
        echo "this is login";

    }





}










?>
@extends('Admin.Layout.master')

@section('title')
    ZhaoXin_BLOGCMS
@stop

@section('css')
    <!--<link rel="stylesheet" type="text/css" href="<?= env("STATIC_URL")?>/style/css/commen.css">-->
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Welcome Zhaoxin BLOG CMS</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control tooltip-options " data-placement="bottom" data-toggle="tooltip"  title="二货！用户名不对,你肯定想搞破坏！！！" placeholder="管理员账户" name="admin_name"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control tooltip-optionss" data-placement="bottom" data-toggle="tooltip" title="二货！密码不对,你是来搞破坏的对不对！！！"  placeholder="密码" name="admin_pass" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="记住密码">记住密码
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="javascript:;" id="loginBtn" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="<?= env("STATIC_URL")?>style/js/Admin/Login/login.js"></script>
@stop

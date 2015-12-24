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
                        <h3 class="panel-title">登录ZHAOXIN_BLOG_CMS管理后台</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on 左侧
                                    </button>
                                    <input class="form-control" placeholder="管理员账户" name="admin_name" id="admin_name"   autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="password"  id="admin_pass" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="记住密码">记住密码
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="javascript:;" id="loginBtn" class="btn btn-lg btn-success btn-block" data-content="你是那个，想搞啥子，分分钟弄死你!">Login</a>
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

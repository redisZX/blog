@extends('Admin.Layout.master')

@section('title')
    凡语BLOG_CMS
@stop

@section('css')
    <link href="<?= env("STATIC_URL")?>style/css/Admin/login/style.css" rel='stylesheet' type='text/css' />
@stop

@section('content')
    <h1>凡语@N。  CMS</h1>
    <div class="login-form">
        <div class="close"> </div>
        <div class="head-info">
            <label class="lbl-1"> </label>
            <label class="lbl-2"> </label>
            <label class="lbl-3"> </label>
        </div>
        <div class="clear"> </div>
        <div class="avtar">
            <img src="<?= env("STATIC_URL")?>style/image/Admin/login/avtar.png" />
        </div>
        <form>
            <input type="text" id="user_name" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            <div class="key">
                <input type="password" id="user_pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
            </div>
        </form>
        <div class="signin">
            <input type="submit" value="Login"  id="admin_login">
        </div>
    </div>
    <div class="copy-rights">
        <p>Copyright &copy; 2015.凡语 <a href="#" target="_blank" title="">凡语</a> - Collect from <a href="#" title="" target="_blank">凡语</a></p>
    </div>
@stop
@section('js')
    <script src="<?= env("STATIC_URL")?>style/js/Admin/Login/login.js"></script>
@stop

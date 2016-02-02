$(document).ready(function(c) {
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    $('.close').on('click', function (c) {
        $('.login-form').fadeOut('slow', function (c) {
            $('.login-form').remove();
        });
    })

    //admin_login
    $('#admin_login').on('click',function(){
       var user_name = $('#user_name').val();
       var pass      = $('#user_pass').val();
       if((!user_name)||(user_name.length<6 || user_name.length>12)){
           layer.msg("你打的一手华丽的酱油!"+"<br/>"+"用户名应该是6-12位的字符");
           return false;
       }else if(!pass){
           layer.msg("要么自由!"+"<br/>"+"密码不能为空");
           return false;
       }else{
           //ajax 提交验证登录
           $.ajax({
               'url':'/Admin/login/select-admin-name',
               'type':'POST',
               headers: {

                   'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

               },
               'data':{
                    user_name:user_name,
                    user_pass:pass,
               },
               success:function(res){
                    alert(res);
               },
               error:function(error){

               }
           })




       }


    })
});
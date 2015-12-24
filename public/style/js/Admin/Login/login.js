//login.js
$(document).ready(function(){


   $('#loginBtn').click(function(){
        var admin_name = $('input[name=admin_name]').val();
        var admin_pass = $('input[name=admin_pass]').val();
        //用户名
        if((!admin_name)||(admin_name.length<6 ||admin_name.length>12)){
            $(".tooltip-options").tooltip('show');
            setTimeout(function(){
                $(".tooltip-options").tooltip('hide');
            },2000)
            $("input[name=admin_name]").focus();
            return false;
        }
        //密码
        if(!admin_pass){
            $(".tooltip-optionss").tooltip('show');
            setTimeout(function(){
                $(".tooltip-optionss").tooltip('hide');
            },2000)
            $("input[name=admin_pass]").focus();
            return false;
        }
        //执行登录ajax
        $.ajax({
            url:'/Admin/login/select-admin-name',
            type:'POST',
            headers: {

                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

            },
            data:{
                admin_name:admin_name,
                admin_pass:admin_pass,
            }
        }).done(function(res){
            alert(res);
        });


   })


});
//login.js
$(document).ready(function(){
   $('#loginBtn').click(function(){
        var admin_name = $('#admin_name').val();
        var admin_pass = $('#admin_pass').val();
        if((!admin_name)||(admin_name.length<6 ||admin_name.length>12)){
            $('#loginBtn').attr('data-content','重新输入，二货用户名输入不对应该是6-12位的数字，字母，字符，或者中文！！！！');
            $("#loginBtn").popover({placement:'bottom'});
            return false;
            //alert('用户名不对');
            //return false;
        }



   })


});
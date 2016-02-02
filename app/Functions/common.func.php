<?php

   //检查是否登录
   if(!function_exists('checkLogin'))
   {
       function checkLogin()
       {
           echo "11133333333333333333333333333333333331";
       }


   }
   //json 对象转数组
   if(!function_exists('objToArray'))
   {
       function objToArray($jsonObj)
       {
           return json_decode(json_encode($jsonObj),true);

       }

   }
   //打印数组
   if(!function_exists('v'))
   {
      function v($arr)
      {
          echo "<pre>";
            var_dump($arr);
          exit('</pre>');

      }
   }
   //输出Json 数据
   if(!function_exists('ajax_return')){
       function ajax_return(){
            return '1111111111111111111111111';
       }
   }










?>
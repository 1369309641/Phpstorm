<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/2 0002
 * Time: 20:02
 */


//检测数据类型
   $boo="043112345678";//声明一个全由数字组成的字符串变量
   if(is_numeric($boo))//判断该变量是否由数字组成
       echo"yes,the\$boo a phone number:$boo!";
   else
       echo"sorry,This is an error!";
   ?>
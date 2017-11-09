<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/2 0002
 * Time: 16:22
 */
   $str1='1234567890';
   $str2='0x1234567890';
   $str3='01234567890';
   $str4='01234567';
   echo'数字1234567890不同进制的输出结果：<p>';
   echo'十进制的结果是：'.$str1.'<br>';
   echo'十六进制的结果是：'.$str2.'<br>';
   echo'八进制的结果是：';
   if($str3==$str4) {
       echo '$str3=$str4=' . $str3;
   }else{
       echo'$str3!=str4';
   }
   ?>


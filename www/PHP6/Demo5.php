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
   echo'����1234567890��ͬ���Ƶ���������<p>';
   echo'ʮ���ƵĽ���ǣ�'.$str1.'<br>';
   echo'ʮ�����ƵĽ���ǣ�'.$str2.'<br>';
   echo'�˽��ƵĽ���ǣ�';
   if($str3==$str4) {
       echo '$str3=$str4=' . $str3;
   }else{
       echo'$str3!=str4';
   }
   ?>


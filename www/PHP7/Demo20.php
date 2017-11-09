<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 12:41
 */
//按自然排序法进行字符串的比较
$str1="str2.jpg";
$str2="str10.jpg";
$str3="mrsoft1";
$str4="MRSOFT2";
echo strcmp($str1,$str2)."<BR>";//按字节进行比较，返回1
echo strcmp($str3,$str4)."<BR>";//按字节进行比较，返回1
echo strnatcmp($str1,$str2)."<BR>";//按自然排序法进行比较，返回-1
echo strnatcmp($str3,$str4);//按自然排序法进行比较，返回1
?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 12:22
 */
//比较字符串(按字节进行字符串的比较)//常用于登录密码区分大小写
$str1="明日编程词典！";
$str2="明日编程词典！";
$str3="mrsoft";
$str4="MRSOFT";
echo strcmp($str1,$str2)."<BR>";//这两个字符串相等
echo strcmp($str3,$str4)."<BR>";//注意该函数区分大小写
echo strcasecmp($str3,$str4);//该函数不区分字母大小写
?>
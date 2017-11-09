<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/6 0006
 * Time: 14:14
 */
//分割字符串
$str = "PHP编程词典@NET编程词典@ASP编程词典";
$str_arr = explode("@",$str);
print_r($str_arr);
?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 13:47
 */
function values($price,$tax=0.45){//定义一个函数，函数的一个参数有默认值
    $price=$price+($price*$tax);//声明一个变量$price，等于两个参数的运算结果
    return $price;}//返回金额
echo values(100);//调用函数
?>
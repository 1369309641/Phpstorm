<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3 0003
 * Time: 13:00
 */
$a="不会看到";//声明全局变量$a
$b="会看到";//声明全局变量$b
function lxt(){
    echo $a."<BR>";//$a不能被调用，没有输出
    global $b;//利用关键字 global在函数内部定义全局变量
    echo $b."<br>";
}
lxt();
?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 16:25
 */
//int array_push(array array,mixed var[mixed...]
//本实例应用array_push()函数向数组中添加元素
$array_push = array("PHP 从入门到精通","PHP范例手册");
array_push($array_push,"PHP开发大全","PHP网络编程");
print_r($array_push);
?>
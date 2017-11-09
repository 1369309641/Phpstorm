<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 16:21
 */
//通过函数array_pop()获取数组中的最后一个单元。
$arr = array("asp","java","javaweb","php","vb");
$array = array_pop($arr);
echo"被弹出的单元是：$array<br>";
print_r($arr);
?>
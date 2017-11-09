<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 16:31
 */
//本实例应用array_unique()函数删除数组中重复的元素
$array_push = array("PHP 从入门到精通","PHP范例手册","PHP开发大全","PHP网络编程");
                        //定义数组
array_push($array_push,"PHP开发大全","PHP网络编程");//添加数组
print_r($array_push);//输出数组
echo"<br>";
$result = array_unique($array_push);//删除数组中重复的元素
print_r($result);//输出删除后的数组
?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3 0003
 * Time: 13:08
 */
$change_name="trans";//声明变量$change_name
$trans="You can see me!";//声明变量$trans
echo $change_name;//输出变量$change_name
echo"<br>";
echo$$change_name;//通过可变变量输出$trans的值
?>
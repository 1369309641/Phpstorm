<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 14:17
 */
//取消引用
$num=1234;
$math=&$num;
echo "\$math is:".$math."<br>";
unset($math);//取消引用
echo"\$math is:".$math."<br>";
echo"\$num is:".$num;
?>
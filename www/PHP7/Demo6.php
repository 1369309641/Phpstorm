<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 14:17
 */
//ȡ������
$num=1234;
$math=&$num;
echo "\$math is:".$math."<br>";
unset($math);//ȡ������
echo"\$math is:".$math."<br>";
echo"\$num is:".$num;
?>
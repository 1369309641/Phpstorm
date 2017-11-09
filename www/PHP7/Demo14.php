<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 11:24
 */
$str="select * from tb_book where bookname = 'PHP5从入门到精通'";
echo $str."<br>";//输出字符串
$a = addslashes($str);//对字符串中的特殊字符进行转义
echo $a."<br>";//输出转义后的字符
$b = stripslashes($a);//对转义后的字符进行还原
echo $b."<br>";//将字符原义输出

?>
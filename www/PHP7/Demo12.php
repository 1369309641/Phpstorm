<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 10:56
 */
//Demo23对的
$str="\r\r(:@_@  创图书编撰伟业  展软件开发雄风 @_@:)     ";
/*echo trim($str);//去除字符串左右两边的空格
echo"<br>";//换行
echo trim($str,"\r\r(::)");//去除字符串左右两边的特殊字符\r\r(::)
echo"<br>";//换行*/
echo ltrim($str);//去除字符串左边的空格
echo"<br>";//换行
echo ltrim($str,":@_@");//去除字符串左边的特殊字符@_@
echo"<br>";//换行
/*echo rtrim($str);//去除字符串右边的空格
echo"<br>";//换行
echo rtrim($str,"(@_@:");//去除字符串右边的特殊字符@_@*/
?>
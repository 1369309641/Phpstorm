<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/2 0002
 * Time: 18:29
 */
echo"变量(\$string1)直接赋值为null:";
$string1 = null;//变量$string1被赋空值
$string3 = "str";//被赋值str
if(is_null($string1))//判断$string1是否为空
    echo "string1=null";
    echo"<p>变量($string2)未被赋值：";
    if(is_null($string2))//判断$string2是否为空
        echo"string2=null";
    echo"<P>被unset()函数处理过的变量（\$string3):";
    unset($string3);
if(is_null($string3))
    echo"string3=null";
?>
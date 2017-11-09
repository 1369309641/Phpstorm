<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3 0003
 * Time: 11:22
 */
$i="spcn";//声明变量$i
$j=&$i;//使用引用赋值，这时$j已经赋值为spcn
$i="hello,$i";//重新给$j赋值
echo $j;//输出变量$j
echo"<br>";//换行
echo $i;//输出变量$i
?>
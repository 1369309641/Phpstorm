<?php
//list — 把数组中的值赋给一些变量 
//$userAge=array('吴奇'=>19,'李彦辉'=>27,'缪建安'=>100);
$userAge=array(19,27,100);
/* $a=array('aaaa','bbbb','ccc','dd');
list($var1,$var2,$var3,$var4)=$a;
echo $var4; */

//list只能认识key为数字的，自定义的字符串是无法使用list来识别的
list($a,$b,$c)=$userAge;
echo $c;
?>
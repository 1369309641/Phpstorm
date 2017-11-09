<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/8 0008
 * Time: 13:55
 */

$sum=22.22;
/* echo "1";
 echo"<br/>";
 echo 123;
 echo"<br/>"; */
 //intval($sum)整体变成了整型,
//echo intval($sum);//临时转换，sum还是浮点型
settype($sum,"integer");//原型都转换成整型了
echo $sum;
echo gettype($sum);

?>

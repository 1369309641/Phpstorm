<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3 0003
 * Time: 13:57
 */
$i=true;
$j=true;
$z=false;
if($i or $j and $z)//用or做判断
    echo "true";
else
    echo"false";
echo"<br>";
if($i || $j and $z)//用||做判断
    echo "true";
else
    echo"false";
echo"<br>";

?>
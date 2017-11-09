<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 12:57
 */
function example($m){//定义一个函数
    $m=$m*5+10;
    echo"在函数内:\$m=".$m;//输出形参的值
}
$m=1;
example($m);//传递值，将$m的值传递给形参$m
echo"<p>再函数外\$m=$m<p>";//实参的值没有发生变化，输出m=1
?>
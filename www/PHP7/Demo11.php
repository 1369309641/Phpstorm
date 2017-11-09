<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 18:30
 */
while(true){
    $tmp = rand(1,20);
    echo $tmp." ";
    if($tmp == 10){
        echo"<p>变量等于10，终止循环";
        break;
    }
}
?>
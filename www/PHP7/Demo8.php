<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 15:39
 */
//判断今天是这个月的上，中，下旬
$month = date("n");
$today = date("j");
if($today >=1 and $today <= 10) {
    echo "今天是" . $month . "月" . $today . "日上旬";}
elseif($today >10 and $today <= 20){
    echo "今天是" . $month . "月" . $today . "日中旬";
}else{
    echo "今天是" . $month . "月" . $today . "日下旬";
}
?>
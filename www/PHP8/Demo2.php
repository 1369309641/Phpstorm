<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 1:04
 */
//使用foreach结构遍历数组
$url = array('编程词典网'=>'www.mrbccd.com',
             '编程体验网'=>'www.bctycd.com',
             '编程资源网'=>'www.mrb110.com',
    );
foreach ($url as $link){
   echo $link."<br>";
}
?>
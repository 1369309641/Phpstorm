<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3 0003
 * Time: 12:40
 */
//下面使用静态变量和普通变量同时输出一个数据
function zdy(){
    static $message = 0;//初始化静态变量
    $message+=1;//静态变量加1
    echo $message." ";//输出静态变量
}
function zdy1(){
    $message = 0;//声明函数内部变量（局部变量）
    $message+=1;//局部变量加1
    echo $message." ";}//输出局部变量
    for($i=0;$i<10;$i++)   zdy();//输出1~10
    echo"<BR>";
    for($i=0;$i<10;$i++)   zdy1();//输出10个1
    echo"<BR>";
?>

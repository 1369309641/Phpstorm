<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30 0030
 * Time: 19:47
 */

class  Person{
    function say(){
        echo'hi';
        self::move();//类内方法调用$this变量，self关键字的学习
    }
    static  function move(){
        echo'moving..';
    }
}

$p1 = new Person;
$p1 ->say();
?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30 0030
 * Time: 17:03
 */
class Person{
    public $hand = '2只手';
    static $type= '动物';
    const VERSON = '动力游戏角色1.01';
    function eat(){
        echo '注意是在方法体中';
    }
    static  function  cry(){
        echo'静态方法';
    }
}
   $p1 = new Person;
   echo $p1 -> hand;
   echo '<br>';//换行
   echo $p1 -> eat();// -> 用于访问普通属性和方法
   echo Person::$type ;//访问静态成员（带$）属性和方法
   echo person::VERSON ;//访问常量
   echo person ::cry();

?>
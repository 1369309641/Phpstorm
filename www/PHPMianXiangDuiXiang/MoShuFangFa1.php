<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31 0031
 * Time: 19:47
 */
//魔术方法__wakeup反序列化
class A{
    public $name='Jack';
    public $money='100w';
    public $food='egg';

    function __sleep()
    {
        return array("food","name") ;  // TODO: Implement __sleep() method.
    }
    function  __wakeup()
    {
        //连接数据库或准备其他资源
      echo '欢迎你,苗先生';  // TODO: Implement __wakeup() method.
    }
}


$a = new A();

$str = serialize($a);

$obj = unserialize($str);

?>
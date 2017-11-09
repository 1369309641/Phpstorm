<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30 0030
 * Time: 19:28
 */
class Person{
    public $hand = '手';
    static  $type = '人类';
    public function f1(){//静态属性不写系统默认也是public
        echo  $this->hand;
        echo self::$type;//类内部访问属性Person：：$type，也行，修改麻烦）
        //$this代表调用f1的当前对象,不能用于静态变量
    }
}

class Sub extends Person{
    function f2(){
        echo $this->hand;
    }
}
$s = new Sub;
$s->f2();

echo $s->hand;


?>
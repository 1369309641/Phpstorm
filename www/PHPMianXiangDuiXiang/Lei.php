<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30 0030
 * Time: 18:40
 */
  class Person{
     public $hand = '手';
     static  $type = '人类';
     public function f1(){//静态属性（方法）不写系统默认也是public
       echo  $this->hand;
       echo self::$type;//类内部访问方法（Person：：$type，也行，修改麻烦）
       //$this代表调用f1的当前对象,不能用于静态变量
     }
}
  $p1 = new Person;//创建对象
//类外访问方法
//echo $p1 -> hand;对象->成员
  $p1 -> hand = '2只手';
//echo Person::$type;类名：：成员
  $p1->f1();

  $p2 = new Person;
  $p2 -> hand = '3只手';
  $p2->f1();
?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31 0031
 * Time: 19:47
 */
//魔术方法__sleep序列化
  class A{
      public $name='Jack';
      public $money='100w';
      public $food='egg';

      function __sleep()
      {
       return array("food","name") ;  // TODO: Implement __sleep() method.
      }
  }

  $a = new A();
  $str = serialize($a);
  echo $str;

  ?>
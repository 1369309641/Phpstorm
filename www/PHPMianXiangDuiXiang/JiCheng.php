<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30 0030
 * Time: 21:08
 */
//一个类只有一个直接父类，一个父类可以有N多子类
  class P{
      public $money = '100w';
      private $clother='衣服';//不能被调用
      protected $right = '权力';//不能被调用
      static $staticvar = '静态变量';
      const V = '18';
      function say(){
          echo'讲话';
      }
      static function move(){
          echo'运动';
      }
  }

  class S extends P{

  }

    $s1 = new  S();
    echo $s1 -> money.'<br>';
    /*var_dump($s1);*/
    echo S::$staticvar.'<br>';
    echo S::V.'<br>';
    $s1 ->say().'<br>';
    $s1::move().'<br>';
?>
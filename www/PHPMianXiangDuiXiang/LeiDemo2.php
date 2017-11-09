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
      }
      static  function move(){
          echo'moving..';
      }
  }

  $p1 = new Person;
  $p1 ->say();
  $p1 ->move();
  Person::move();//这两种方法对静态方法都可以
?>
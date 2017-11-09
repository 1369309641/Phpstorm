<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31 0031
 * Time: 15:37
 */
  class P{
      //同样的代码在父类和子类中有别
      function getName(){
          echo$this -> name;
          echo S::$name1;//通过类名访问
      }
  }

   class S extends P{
      protected  $name = '子类';
      static  $name1='静态属性';
   }

   $s1 = new S();
   $s1 ->getName();
?>
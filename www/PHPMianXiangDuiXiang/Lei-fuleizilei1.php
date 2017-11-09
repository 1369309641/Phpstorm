<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31 0031
 * Time: 15:37
 */
//后期静态绑定,static关键字应用
  class P{
      //同样的代码在父类和子类中有别
      function getName(){
          echo static::$name;//通过类名访问
      }
  }

   class S extends P{
        static  $name = '子类110';
   }
   class S2 extends P{
    static  $name = '子类220';
}
   $s1 = new S();
   $s1 ->getName();
   $s2 = new S2();
   $s2 ->getName();
?>
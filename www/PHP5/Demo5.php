<?php

      //包含参数，有返回值的
      //$radius=10这个10表示这个参数的默认值
      /*如果调用函数没有给函数传一个参数，那么久启用默认值，
       * 如果传参了，则把默认值覆盖掉
       */
       function  functionArea($radius=20){
        //$radius=10;
        $area=$radius*$radius*pi();
         return $area;
      }

       //调用
       // echo  'r为20的圆的面积为'.functionArea(20);
        echo  'r为20的圆的面积为'.functionArea();
 

?>
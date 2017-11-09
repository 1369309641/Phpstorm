<?php
  //包含参数无返回值的函数
  /*一般来说写好的函数就不用修改了，变化的一般是传入的参数  */
        //echo pi();
    function  functionArea($radius){
        //$radius=10;
       $area=$radius*$radius*pi();
       echo  "半径为"."$radius"."的圆的面积为"."$area";
   }

   //调用
    functionArea(30);
?>
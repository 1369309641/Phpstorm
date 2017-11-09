<?php

   //包含参数，有返回值的
   function  functionArea($radius){
    //$radius=10;
    $area=$radius*$radius*pi();
    return $area;
   }

   //调用,这样子大大提高了程序的灵活性，fanctionArea整体就得到一个值在内存里
    echo  'r为20的圆的面积为'.functionArea(25);
   
   
   
   
   
   
?>
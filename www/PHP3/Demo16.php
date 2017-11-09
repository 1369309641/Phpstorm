<?php

 $fruit =array("banana","orange","apple");
 //array_rand — 从数组中随机取出一个或多个单元 
 //这个函数用来获取一个数组中的键(key),第二个参数表明随机获取几个
  $a=array_rand($fruit,1);
  /*$a=array_rand($fruit,2);
   * echo $a[0];
   * echo $a[1];
   */
  //echo $a;
  echo $fruit[$a];
?>
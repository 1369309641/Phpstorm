<?php
   //了解全局变量
  $a=5;
  
  function fa(){
      global $a;//将$a设置为全局变量
      $a=2;
  }
  fa();//加这句也一样
  echo $a;
?>
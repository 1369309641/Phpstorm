<?php
   //之前的传参都是按值传参
//函数里的变量和函数外的变量没有任何联系
   $prices=50;
   $tax=0.5;
   function  functionPrices($prices,$tax){
      $prices=$prices+$prices*$tax;
      $tax=$tax*$tax;
      echo $prices;//75
      echo '<br>';
      echo $tax;
      echo '<br>';
      echo '<br>';
  }

  /* functionPrices($prices, $tax);
  echo $prices;//按值传50
  echo '<br>';
  echo $tax;
  
  
  function  functionPrices(&$prices,$tax){//加&就是引用，形参也会改变
       $prices=$prices+$prices*$tax;
       $tax=$tax*$tax;
       echo $prices;//75
       echo '<br>';
       echo $tax;
       echo '<br>';
       echo '<br>';
   }
    */
   //函数调用时不区分大小写，但是变量区分大小写
   functionPrices($prices, $tax);
   echo $prices;//按值传50
   echo '<br>';
   echo $tax;
   
?>
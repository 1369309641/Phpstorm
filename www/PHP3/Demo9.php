<?php
  $products=array(
      
      array("苹果",6,28.8),
      array("猪肉",2,32.6),
      array("饼干",3,45.3),
  );
   
 // print_r($products);
// 将$products第一条元素取出来
  //print_r($products[0][2]);
  //数组里的数组
  echo "|".$products[0][0]."|".$products[0][1]."|".$products[0][2]."<br>";
  echo "|".$products[1][0]."|".$products[1][1]."|".$products[1][2]."<br>";
  echo "|".$products[2][0]."|".$products[2][1]."|".$products[2][2]."<br>";
?>
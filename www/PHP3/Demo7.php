<?php

  //array_unique — 移除数组中重复的值
  //创建了一个新数组，新数组已经移除了，旧的数组原封不动
 /*  $userAge=array('吴奇'=>19,'李彦辉'=>27,'缪建安'=>100,'皮卡邱'=>100);
  print_r($userAge);
  
  echo '<br>';
  $a=array_unique($userAge);
  print_r($a); */
  
  
  $numbers=array(1,2,4,2,3,6,1,5,6,3,6,3,2,2);
  //print_r($numbers);
  $newnumbers=array_unique($numbers);
  print_r($newnumbers);
?>
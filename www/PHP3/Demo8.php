<?php
  $userAge=array('吴奇'=>19,'李彦辉'=>27,'缪建安'=>100,'皮卡邱'=>520);
  
  print_r($userAge);
  
  echo'<br>';
  
  //array_flip — 交换数组中的键和值
  $newuserAge = array_flip($userAge);
  print_r($newuserAge);
  
?>
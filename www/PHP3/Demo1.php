<?php
  //先创建一个只有一个元素的数组
  $userAge = array('吴奇'=>19);
  print_r($userAge) ;
  /*打印出吴奇的年龄
  echo '<br>'.$userAge['吴奇'];*/
  echo '<br>';
  $userAge ['李彦辉']=27;
  $userAge ['大家好']=57;
  //echo '<br>'.$userAge['李彦辉'];
  print_r($userAge);
?>
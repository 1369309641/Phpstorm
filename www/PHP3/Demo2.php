<?php
  $userAges['吴奇']=19;
  
  $userAges ['李彦辉']=27;//追加数组
  $userAges ['缪建安']=17;
  //print_r($userAges) ;
  foreach ($userAges as $key => $value){
      echo $key.'---'.$value.'岁<br>';
  }
?>
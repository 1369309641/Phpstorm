<?php
  $a='100.333';
  $b='123abc';
  //echo is_numeric($a);//判断一个字符是否是数字或者数值型字符串
  if(is_numeric($a)){
      echo 'a是一个数字';
  }else{
      echo 'a不是一个数字';
  }
  
  if(is_numeric($b)){
      echo '<br>b一个数字';
  }else{
      echo '<br>b不是一个数字';
  }
?>
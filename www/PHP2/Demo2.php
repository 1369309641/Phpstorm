<?php
  $a='100.333';
  $b='123abc';
  //echo is_numeric($a);//�ж�һ���ַ��Ƿ������ֻ�����ֵ���ַ���
  if(is_numeric($a)){
      echo 'a��һ������';
  }else{
      echo 'a����һ������';
  }
  
  if(is_numeric($b)){
      echo '<br>bһ������';
  }else{
      echo '<br>b����һ������';
  }
?>
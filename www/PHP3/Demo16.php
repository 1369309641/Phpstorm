<?php

 $fruit =array("banana","orange","apple");
 //array_rand �� �����������ȡ��һ��������Ԫ 
 //�������������ȡһ�������еļ�(key),�ڶ����������������ȡ����
  $a=array_rand($fruit,1);
  /*$a=array_rand($fruit,2);
   * echo $a[0];
   * echo $a[1];
   */
  //echo $a;
  echo $fruit[$a];
?>
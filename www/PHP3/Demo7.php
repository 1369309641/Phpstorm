<?php

  //array_unique �� �Ƴ��������ظ���ֵ
  //������һ�������飬�������Ѿ��Ƴ��ˣ��ɵ�����ԭ�ⲻ��
 /*  $userAge=array('����'=>19,'�����'=>27,'�ѽ���'=>100,'Ƥ����'=>100);
  print_r($userAge);
  
  echo '<br>';
  $a=array_unique($userAge);
  print_r($a); */
  
  
  $numbers=array(1,2,4,2,3,6,1,5,6,3,6,3,2,2);
  //print_r($numbers);
  $newnumbers=array_unique($numbers);
  print_r($newnumbers);
?>
<?php

  $userAge=array('����'=>19,'�����'=>27,'�ѽ���'=>100);
  //print_r($userAge);
  //each �� ���������е�ǰ�ļ���ֵ�Բ�������ָ����ǰ�ƶ�һ��
   //�൱�ڲ���һ��������$a = array([0]=>���棬[1]=>19,[value]=>19,[key]=>����) 
  each($userAge);//����ǵ�һ������19������ȡ������װ��һ��������
  $a=each($userAge);
  //echo $a[0];
  
  //echo $a[key];
 //echo $a[value];
 echo $a['value'];
  ?>
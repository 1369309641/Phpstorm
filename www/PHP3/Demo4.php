<?php
  $userAge=array('����'=>19,'�����'=>27,'�ѽ���'=>100);
  /* $a=each($userAge);
  echo $a['key'].'---'.$a['value'].'<br>';
  
  $a=each($userAge);
  echo $a[0].'---'.$a[1].'<br>';
  
  $a=each($userAge);
  echo $a[0].'---'.$a[1].'<br>'; */
  
  //������̾�ű�ʾ��ʵ���ڵ�����ת���ɲ���ֵ
  /* echo !!each($userAge);//˵��������
  echo !!each($userAge);
  echo !!each($userAge);
  echo !!each($userAge);//���ĸ��Ǽٵ� */
  
  while (!!$a=each($userAge)){
      echo  $a['key'].'---'.$a['value'].'<br>';
  }
  
  
?>
<?php
  $userAge=array('����'=>19,'�����'=>27,'�ѽ���'=>100,'Ƥ����'=>520);
  
  print_r($userAge);
  
  echo'<br>';
  
  //array_flip �� ���������еļ���ֵ
  $newuserAge = array_flip($userAge);
  print_r($newuserAge);
  
?>
<?php
   //�˽�ȫ�ֱ���
  $a=5;
  
  function fa(){
      global $a;//��$a����Ϊȫ�ֱ���
      $a=2;
  }
  fa();//�����Ҳһ��
  echo $a;
?>
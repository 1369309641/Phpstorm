<?php

   $userAge=array('����'=>19,'�����'=>27,'�ѽ���'=>100);
  
   $a =each($userAge);
   echo $a['key'];
  
   $a= each($userAge);
   echo $a['key'];
   
   reset($userAge);
   $a =each($userAge);
   echo $a['key'];
   each($userAge);
   $a =each($userAge);
   echo $a['key'];
?>
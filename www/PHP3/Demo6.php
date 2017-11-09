<?php

   $userAge=array('ÎâÆæ'=>19,'ÀîÑå»Ô'=>27,'çÑ½¨°²'=>100);
  
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
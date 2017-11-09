<?php

  $userAge=array('吴奇'=>19,'李彦辉'=>27,'缪建安'=>100);
  //print_r($userAge);
  //each — 返回数组中当前的键／值对并将数组指针向前移动一步
   //相当于产生一个新数组$a = array([0]=>吴奇，[1]=>19,[value]=>19,[key]=>吴奇) 
  each($userAge);//这个是第一步，将19，吴奇取出，包装成一个新数组
  $a=each($userAge);
  //echo $a[0];
  
  //echo $a[key];
 //echo $a[value];
 echo $a['value'];
  ?>
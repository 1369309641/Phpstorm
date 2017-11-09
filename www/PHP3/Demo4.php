<?php
  $userAge=array('吴奇'=>19,'李彦辉'=>27,'缪建安'=>100);
  /* $a=each($userAge);
  echo $a['key'].'---'.$a['value'].'<br>';
  
  $a=each($userAge);
  echo $a[0].'---'.$a[1].'<br>';
  
  $a=each($userAge);
  echo $a[0].'---'.$a[1].'<br>'; */
  
  //两个感叹号表示真实存在的数据转换成布尔值
  /* echo !!each($userAge);//说明有数据
  echo !!each($userAge);
  echo !!each($userAge);
  echo !!each($userAge);//第四个是假的 */
  
  while (!!$a=each($userAge)){
      echo  $a['key'].'---'.$a['value'].'<br>';
  }
  
  
?>
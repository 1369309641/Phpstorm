<?php
//extract — 从数组中将变量导入到当前的符号表
//返回int
$a=$b=$c='';
$fruits=array('a'=>'apple','b'=>'banane','c'=>'orange');
//通过标量变量函数将字符串额键（key）设置成变量，然后将值赋给了这个变量
  extract($fruits);
   echo $a;
   echo '<br>'.$b;
   echo '<br>'.$c;
?>
<?php

  //include 'Demo1.php';//如果不存在就给你两个警告，然后继续执行后面的代码
/*  include_once 'Demo1.php';//Once是限制只包含一次
  include_once ('Demo1.php');  */
  
   require 'Demo1.php';//Once是限制只包含一次，更推荐用这个
   require_once'Demo1.php';//和include的区别是如果不存在就直接报错，然后不再执行
   echo '<strong>这是Demo11</strong>'
?>
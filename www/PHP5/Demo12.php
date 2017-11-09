<?php

   //_FILE_魔法常量--这里的常量是一个值

  $file =__FILE__;//这里的一个下划线有两个下划线
   //所以一般包含文件的时候，建议采用__FILE__速度更快
   //echo  $file; 
  //dirname取得目录，去掉文件名
 // echo dirname(__FILE__)."\Demo1.php";
    require(dirname(__FILE__)."\Demo1.php") ;
    
    echo __LINE__;
    
    function a(){
       return __FUNCTION__; 
    }
    echo a();
?>
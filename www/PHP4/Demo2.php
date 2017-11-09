<?php
//realpath — 返回规范化的绝对路径名
/* 这个叫做绝对路径
   $path='D:\wamp\www\index.php */
   //$path='index.php';//这个叫做相对路径
     //$path='D:\wamp\www\Basic4\picture\1.jpg';
     
     /* $path='1.jpg';
     echo realpath($path); */
     
     /*  $path='../index.php';//..访问上一级目录
      echo realpath($path); */
      
        $path='123/1.txt';//..访问目录某个文件夹的某个文件的绝对路径
        echo realpath($path);
?>
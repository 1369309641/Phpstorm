<?php

   //打开一个目录
   $dir = opendir('D:\wamp\www\Basic4');
   
   //读出目录，使用一个循环读出
   /* 字符串是一个布尔值，就是说，字符串不能空就真 */
   /* while (!!$file= readdir($dir)){
       echo $file.'<br>';
   } */
   
   
   
   /* closedir($dir);
   print_r(scandir('D:\wamp\www\Basic4')); */
   
   //rmdir — 删除目录,相对路径和绝对路径都可以
   //rmdir('D:\wamp\www\Basic4\10086');
//    rmdir('10086');//不能删除文件（unlink_file）
   
   
   //重命名
   //rename('pkq', 'pkq.txt');文件改名
   rename('123', '520pkq');//文件夹目录改名
   
   
   
?>
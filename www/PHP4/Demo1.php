<?php
     //将绝对路径赋给一个变量，这个只是一个字符串，只是它表示的是一个路径
     //文件包括文件的名称和文件的扩展名(类型-后缀）
     $path='D:\1369309641\FileRecv\MobileFile\thumb\1.JPG';
/*      echo $path;
     echo '<br>'.basename($path);//返回文件名部分
     echo '<br>'.dirname($path);//返回文件的目录部分 */
     //print_r(pathinfo($path));
     
     $array_path = pathinfo($path);
     echo $array_path['dirname'];//这个打印出的是目录
     echo '<br>'.$array_path['basename'];//这个打印出的是文件名
     echo '<br>'.$array_path['extension'];//文件的后缀
     echo '<br>'.$array_path['filename'];//不带后缀的文件名
     
     
     
     
     
     
     
 ?>
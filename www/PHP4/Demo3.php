<?php

$path='D:\wamp\www\Basic4\picture\1.jpg';
//echo filesize($path);//返回文件的大小，值是字节
echo round(filesize($path)/1024,2).'kb';//返回kb,2表示保留两位
?>
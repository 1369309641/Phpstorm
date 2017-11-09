<?php
$path='D:\wamp\www\Basic1\Demo1.php';

//echo fileatime($path);
//date — 格式化一个本地时间／日期
//date_default_timezone_get — 取得一个脚本中所有日期时间函数所使用的默认时区

//中国时间
/* date_default_timezone_set('Asia/shanghai');
echo date('Y-m-d H:i:s'); */
//fileatime — 取得文件的上次访问时间
date_default_timezone_set('Asia/shanghai');
//获取最后的访问时间
echo '最后访问：'.date('Y-m-d H:i:s',fileatime($path)).'<br>';//换行符可以加载末尾，也可以加在开头
//获取最后的改变时间，所有者权限的修改难度较大
echo '<br>'.'权限所有者：'.date('Y-m-d H:i:s',filectime($path));
//获取最后的改变时间,文件里面的内容修改后的时间
echo '<br>'.'内容修改时间：'.date('Y-m-d H:i:s',filemtime($path));





?>
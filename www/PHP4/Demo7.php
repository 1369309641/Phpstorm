<?php

   // 第一种写法
   //\r\n可以让文本文件换行
   
   //$fp = fopen('520pkq.txt','w');//只写
   $fp = fopen('520pkq.txt','a');//追加写
   $outputstring="This is a  love letter\r\n缪建安爱皮卡邱";
   fwrite($fp, $outputstring,strlen($outputstring));
   fclose($fp);

   
   
   //第二种写法
   file_put_contents("1314.txt", "This is a  love letter\r\n缪建安爱皮卡邱")
?>
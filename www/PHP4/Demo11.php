<?php
/* 读取一个文件的时候，必须保证这个文件存在
       否则报错，不让执行
       这时就需要一个检测
   
    file_exists — 检查文件或目录是否存在*/
    if (file_exists("520pkq.txt")){
   // if (file_exists("file.txt")){
        echo "执行读写操作";
    } else{
        echo "此文本不存在";
    }

      
?>
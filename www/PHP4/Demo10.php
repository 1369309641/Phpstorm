<?php

    $fp = fopen('520pkq.txt','r');
   
    //feof — 测试文件指针是否到了文件结束的位置
    while(!feof($fp)){
    echo fgetc($fp);
    
    }
    fclose($fp);
    
    
    
    
    
    
    
    
?>
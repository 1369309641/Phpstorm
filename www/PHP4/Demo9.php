<?php
/* 
   //file — 把整个文件读入一个数组中
   $array_file=file("520pkq.txt");
   
   print_r($array_file) ;
   //和数组一样，这个打印出的是文件的第二行
   echo $array_file[1] ; 
   */
   


    //readfile — 输出文件,读取文件并写入到输出缓冲。
    
    //readfile是将整个文件读出来(不同于fpasecho)，本身包含了向浏览器输入的功能sthru
     //返回的是文件字节的总长度
    // readfile('520pkq.txt');
    



    //file_get_contents —可以读入数据到缓冲区，然后通过echo打印出来
     echo file_get_contents('520pkq.txt');


?>
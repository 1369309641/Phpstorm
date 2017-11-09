<?php

  //echo filesize('520pkq.txt');//like Demo3文本大小，字节


  /* //删除一个文件
  unlink('jjj.txt'); */
  

   $fp = fopen('520pkq.txt','r');
   
  /*  echo fgetc($fp);
   echo fgetc($fp);
   echo fgetc($fp);
   echo fgetc($fp);
     rewind($fp); *///rewind — 倒回文件指针的位置
   /*echo fgetc($fp); */
   
   
  
   //ftell — 返回文件指针读/写的位置
   /* echo ftell($fp);
   
   
   fclose( $fp); */
   
   //fseek — 在文件指针中定位
   /* echo ftell($fp);
   
   fseek($fp,12);
   
   echo ftell($fp);
   echo  fgetc($fp); */
  
  
  // flock — 轻便的咨询文件锁定

?>
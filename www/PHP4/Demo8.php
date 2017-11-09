<?php

       //读取文件
       $fp = fopen('520pkq.txt','r');
       //fgetc — 从文件指针中读取字符,并将指针移至下一个字符串
      /*  echo fgetc($fp);
       echo fgetc($fp); */

       
       
      //fgets — 从文件指针中读取一行

       //echo fgets($fp,2);//读取一行并返回长度最多为 length - 1 字节的字符串
     //  echo fgetss($fp,2);//fgetss — 从文件指针中读取一行并过滤掉 HTML 标记,从指向的文件中大读取 length - 1 个字节的字符，并过滤了所有的 HTML 和 PHP 代码。 

       
       
       //fpassthru — 输出文件指针处的所有剩余数据
       echo fgetc($fp);
       echo fgetc($fp);
       echo fgetc($fp);
       echo '<br>';
       fpassthru($fp);//本身包含了向浏览器输出的功能，所以不需要echo也可以（有的话则返回int）
       
?>
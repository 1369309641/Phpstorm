<?php
 //fopen — 打开文件或者 URL，返回的是resource资源类型，一般叫句柄或资源句柄
 //第一个参数表明哪个文件，第二个文件表明模式——w只写
 /* fopen('filw.txt', 'w');
 //如果已经有这个文件存在，则删除原来的文件重新创建，没有的话则会自行创建
 fopen('123.txt', 'w'); */
 
   $fp=fopen('1.txt', 'w');
   
   //fwrite — 写入文件（可安全用于二进制文件）
   //fwrite($fp, '缪建安爱皮卡邱');//最好不要用中文
  /*  fwrite($fp, 'This is qiu xian ying',21);//后面跟的数字是表示长度，空格也算
 
 //fclose — 关闭一个已打开的文件指针
  * 当打开一个文件的时候习惯性的把它关闭
   fclose($fp); */
   
   
   
   /* $outstring='this is a pkq,she is 21';
   echo strlen($outstring);
   fwrite($fp,$outstring,strlen($outstring));
   fclose($fp); */
   
   
   
   //file_put_contents — 将一个字符串写入文件,就只有一句话，不需要做其他灵活的事情的事情使用
   //这个比较新，只有在PHP5的版本才可以使用
   file_put_contents('miaojiananpikaqiu.txt','this is a love letter');
   
   
   
   
   
   
   
?>
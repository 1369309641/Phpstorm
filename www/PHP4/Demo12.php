<?php

  //echo filesize('520pkq.txt');//like Demo3�ı���С���ֽ�


  /* //ɾ��һ���ļ�
  unlink('jjj.txt'); */
  

   $fp = fopen('520pkq.txt','r');
   
  /*  echo fgetc($fp);
   echo fgetc($fp);
   echo fgetc($fp);
   echo fgetc($fp);
     rewind($fp); *///rewind �� �����ļ�ָ���λ��
   /*echo fgetc($fp); */
   
   
  
   //ftell �� �����ļ�ָ���/д��λ��
   /* echo ftell($fp);
   
   
   fclose( $fp); */
   
   //fseek �� ���ļ�ָ���ж�λ
   /* echo ftell($fp);
   
   fseek($fp,12);
   
   echo ftell($fp);
   echo  fgetc($fp); */
  
  
  // flock �� ������ѯ�ļ�����

?>
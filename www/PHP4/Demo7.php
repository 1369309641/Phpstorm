<?php

   // ��һ��д��
   //\r\n�������ı��ļ�����
   
   //$fp = fopen('520pkq.txt','w');//ֻд
   $fp = fopen('520pkq.txt','a');//׷��д
   $outputstring="This is a  love letter\r\n�ѽ�����Ƥ����";
   fwrite($fp, $outputstring,strlen($outputstring));
   fclose($fp);

   
   
   //�ڶ���д��
   file_put_contents("1314.txt", "This is a  love letter\r\n�ѽ�����Ƥ����")
?>
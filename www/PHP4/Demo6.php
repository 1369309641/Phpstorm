<?php
 //fopen �� ���ļ����� URL�����ص���resource��Դ���ͣ�һ��о������Դ���
 //��һ�����������ĸ��ļ����ڶ����ļ�����ģʽ����wֻд
 /* fopen('filw.txt', 'w');
 //����Ѿ�������ļ����ڣ���ɾ��ԭ�����ļ����´�����û�еĻ�������д���
 fopen('123.txt', 'w'); */
 
   $fp=fopen('1.txt', 'w');
   
   //fwrite �� д���ļ����ɰ�ȫ���ڶ������ļ���
   //fwrite($fp, '�ѽ�����Ƥ����');//��ò�Ҫ������
  /*  fwrite($fp, 'This is qiu xian ying',21);//������������Ǳ�ʾ���ȣ��ո�Ҳ��
 
 //fclose �� �ر�һ���Ѵ򿪵��ļ�ָ��
  * ����һ���ļ���ʱ��ϰ���Եİ����ر�
   fclose($fp); */
   
   
   
   /* $outstring='this is a pkq,she is 21';
   echo strlen($outstring);
   fwrite($fp,$outstring,strlen($outstring));
   fclose($fp); */
   
   
   
   //file_put_contents �� ��һ���ַ���д���ļ�,��ֻ��һ�仰������Ҫ�������������������ʹ��
   //����Ƚ��£�ֻ����PHP5�İ汾�ſ���ʹ��
   file_put_contents('miaojiananpikaqiu.txt','this is a love letter');
   
   
   
   
   
   
   
?>
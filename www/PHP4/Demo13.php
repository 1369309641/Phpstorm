<?php

   //��һ��Ŀ¼
   $dir = opendir('D:\wamp\www\Basic4');
   
   //����Ŀ¼��ʹ��һ��ѭ������
   /* �ַ�����һ������ֵ������˵���ַ������ܿվ��� */
   /* while (!!$file= readdir($dir)){
       echo $file.'<br>';
   } */
   
   
   
   /* closedir($dir);
   print_r(scandir('D:\wamp\www\Basic4')); */
   
   //rmdir �� ɾ��Ŀ¼,���·���;���·��������
   //rmdir('D:\wamp\www\Basic4\10086');
//    rmdir('10086');//����ɾ���ļ���unlink_file��
   
   
   //������
   //rename('pkq', 'pkq.txt');�ļ�����
   rename('123', '520pkq');//�ļ���Ŀ¼����
   
   
   
?>
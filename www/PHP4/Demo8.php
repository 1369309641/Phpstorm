<?php

       //��ȡ�ļ�
       $fp = fopen('520pkq.txt','r');
       //fgetc �� ���ļ�ָ���ж�ȡ�ַ�,����ָ��������һ���ַ���
      /*  echo fgetc($fp);
       echo fgetc($fp); */

       
       
      //fgets �� ���ļ�ָ���ж�ȡһ��

       //echo fgets($fp,2);//��ȡһ�в����س������Ϊ length - 1 �ֽڵ��ַ���
     //  echo fgetss($fp,2);//fgetss �� ���ļ�ָ���ж�ȡһ�в����˵� HTML ���,��ָ����ļ��д��ȡ length - 1 ���ֽڵ��ַ��������������е� HTML �� PHP ���롣 

       
       
       //fpassthru �� ����ļ�ָ�봦������ʣ������
       echo fgetc($fp);
       echo fgetc($fp);
       echo fgetc($fp);
       echo '<br>';
       fpassthru($fp);//��������������������Ĺ��ܣ����Բ���ҪechoҲ���ԣ��еĻ��򷵻�int��
       
?>
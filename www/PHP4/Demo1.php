<?php
     //������·������һ�����������ֻ��һ���ַ�����ֻ������ʾ����һ��·��
     //�ļ������ļ������ƺ��ļ�����չ��(����-��׺��
     $path='D:\1369309641\FileRecv\MobileFile\thumb\1.JPG';
/*      echo $path;
     echo '<br>'.basename($path);//�����ļ�������
     echo '<br>'.dirname($path);//�����ļ���Ŀ¼���� */
     //print_r(pathinfo($path));
     
     $array_path = pathinfo($path);
     echo $array_path['dirname'];//�����ӡ������Ŀ¼
     echo '<br>'.$array_path['basename'];//�����ӡ�������ļ���
     echo '<br>'.$array_path['extension'];//�ļ��ĺ�׺
     echo '<br>'.$array_path['filename'];//������׺���ļ���
     
     
     
     
     
     
     
 ?>
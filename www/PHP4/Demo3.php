<?php

$path='D:\wamp\www\Basic4\picture\1.jpg';
//echo filesize($path);//�����ļ��Ĵ�С��ֵ���ֽ�
echo round(filesize($path)/1024,2).'kb';//����kb,2��ʾ������λ
?>
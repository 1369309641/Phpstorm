<?php
/* 
   //file �� �������ļ�����һ��������
   $array_file=file("520pkq.txt");
   
   print_r($array_file) ;
   //������һ���������ӡ�������ļ��ĵڶ���
   echo $array_file[1] ; 
   */
   


    //readfile �� ����ļ�,��ȡ�ļ���д�뵽������塣
    
    //readfile�ǽ������ļ�������(��ͬ��fpasecho)����������������������Ĺ���sthru
     //���ص����ļ��ֽڵ��ܳ���
    // readfile('520pkq.txt');
    



    //file_get_contents �����Զ������ݵ���������Ȼ��ͨ��echo��ӡ����
     echo file_get_contents('520pkq.txt');


?>
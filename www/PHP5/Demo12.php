<?php

   //_FILE_ħ������--����ĳ�����һ��ֵ

  $file =__FILE__;//�����һ���»����������»���
   //����һ������ļ���ʱ�򣬽������__FILE__�ٶȸ���
   //echo  $file; 
  //dirnameȡ��Ŀ¼��ȥ���ļ���
 // echo dirname(__FILE__)."\Demo1.php";
    require(dirname(__FILE__)."\Demo1.php") ;
    
    echo __LINE__;
    
    function a(){
       return __FUNCTION__; 
    }
    echo a();
?>
<?php

    //�������Ҫ���ض�����ݣ�������
    //������ı����ͺ�����ı���û���κ���ϵ��������������ν
     function  functionInfo($name,$age,$job){
         
        //return 1;
        /*  $userInfo = array($name,$age,$job);
         return $userInfo; */
         
         $userInfo[]=$name;
         $userInfo[]=$age;
         $userInfo[]=$job;
         return $userInfo;
     }
    // print_r(functionInfo('����',19,'ѧ��'))
     
     //���ú���
   //  print_r(functionInfo('����',19,'ѧ��'));
    /*  $arr=functionInfo('����',19,'ѧ��');
     echo $arr[0];
      */
     
     
     
  
     list($name,$age,$job)=functionInfo('����', 19, 'ѧ��');
     echo $name.'����'.$age.'����,'.'�����Ǹ�'.$job;
     
?>
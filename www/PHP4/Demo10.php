<?php

    $fp = fopen('520pkq.txt','r');
   
    //feof �� �����ļ�ָ���Ƿ����ļ�������λ��
    while(!feof($fp)){
    echo fgetc($fp);
    
    }
    fclose($fp);
    
    
    
    
    
    
    
    
?>
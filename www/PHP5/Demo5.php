<?php

      //�����������з���ֵ��
      //$radius=10���10��ʾ���������Ĭ��ֵ
      /*������ú���û�и�������һ����������ô������Ĭ��ֵ��
       * ��������ˣ����Ĭ��ֵ���ǵ�
       */
       function  functionArea($radius=20){
        //$radius=10;
        $area=$radius*$radius*pi();
         return $area;
      }

       //����
       // echo  'rΪ20��Բ�����Ϊ'.functionArea(20);
        echo  'rΪ20��Բ�����Ϊ'.functionArea();
 

?>
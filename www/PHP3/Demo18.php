<?php
$userAge=array('����','�����','�ѽ���');
//currentĬ������£�ָ���ڵ�һ������
//��ȡָ�뵱ǰԪ��,current�����Ὣָ���ƶ�����һ��
//echo current($userAge);

//�������ָ����ǰ�ƶ�һλ
 echo  next($userAge);
 echo current($userAge);
 echo  next($userAge);
 echo current($userAge);
 //echo reset($userAge);//����ָ���һ��ָ��λ��
 echo prev($userAge);
 echo sizeof($userAge);//��countһ��
?>
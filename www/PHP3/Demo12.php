<?php

  //sort �� ����������(���������ĵ�����)
 /*  $fruit =array("banana","orange","apple");
  //û������ǰһ���ǰ�key˳����ʾ
  //print_r($fruit);
  
  sort($fruit);
  //����֮��
  print_r($fruit);
   */
  



 /* $userAge=array('����','�����','����');

 print_r($userAge);
 echo '<br>';
 sort($userAge);
 print_r($userAge);
 */
 


//����ǰ
 $numbers=array(22,55,267,15,89,8,44,166,488,799,0,33,655,777);
print_r($numbers);
echo '<br>';
//�����Ƕ����ֽ��������
/* $numbers=array(22,55,267,15,89,8,44,166,488,799,0,33,655,777);
sort($numbers);
print_r($numbers);  */
$numbers=array(22,55,267,15,89,8,44,166,488,799,0,33,655,777);
rsort($numbers);//������������
print_r($numbers);





/* $numbers=array('2','12');//�˴����ֿɱ�������ֵ�����ַ���
sort($numbers);
print_r($numbers); */

/*  $numbers=array(2,12);//�˴����ֿɱ�������ֵ�����ַ���
sort($numbers,SORT_NUMERIC);//�˴����ֱ�������ֵ���������С����
print_r($numbers);  */

/* $numbers=array('2','12');//�˴����ֿɱ�������ֵ�����ַ���
sort($numbers,SORT_STRING);//�˴����ֱ������ַ���(ֻ����һλ)
print_r($numbers); */

?>
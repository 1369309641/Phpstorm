<?php
//extract �� �������н��������뵽��ǰ�ķ��ű�
//����int
$a=$b=$c='';
$fruits=array('a'=>'apple','b'=>'banane','c'=>'orange');
//ͨ�����������������ַ��������key�����óɱ�����Ȼ��ֵ�������������
  extract($fruits);
   echo $a;
   echo '<br>'.$b;
   echo '<br>'.$c;
?>
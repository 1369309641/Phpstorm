<?php
   //֮ǰ�Ĵ��ζ��ǰ�ֵ����
//������ı����ͺ�����ı���û���κ���ϵ
   $prices=50;
   $tax=0.5;
   function  functionPrices($prices,$tax){
      $prices=$prices+$prices*$tax;
      $tax=$tax*$tax;
      echo $prices;//75
      echo '<br>';
      echo $tax;
      echo '<br>';
      echo '<br>';
  }

  /* functionPrices($prices, $tax);
  echo $prices;//��ֵ��50
  echo '<br>';
  echo $tax;
  
  
  function  functionPrices(&$prices,$tax){//��&�������ã��β�Ҳ��ı�
       $prices=$prices+$prices*$tax;
       $tax=$tax*$tax;
       echo $prices;//75
       echo '<br>';
       echo $tax;
       echo '<br>';
       echo '<br>';
   }
    */
   //��������ʱ�����ִ�Сд�����Ǳ������ִ�Сд
   functionPrices($prices, $tax);
   echo $prices;//��ֵ��50
   echo '<br>';
   echo $tax;
   
?>
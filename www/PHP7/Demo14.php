<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 11:24
 */
$str="select * from tb_book where bookname = 'PHP5�����ŵ���ͨ'";
echo $str."<br>";//����ַ���
$a = addslashes($str);//���ַ����е������ַ�����ת��
echo $a."<br>";//���ת�����ַ�
$b = stripslashes($a);//��ת�����ַ����л�ԭ
echo $b."<br>";//���ַ�ԭ�����

?>
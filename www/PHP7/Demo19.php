<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 12:22
 */
//�Ƚ��ַ���(���ֽڽ����ַ����ıȽ�)//�����ڵ�¼�������ִ�Сд
$str1="���ձ�̴ʵ䣡";
$str2="���ձ�̴ʵ䣡";
$str3="mrsoft";
$str4="MRSOFT";
echo strcmp($str1,$str2)."<BR>";//�������ַ������
echo strcmp($str3,$str4)."<BR>";//ע��ú������ִ�Сд
echo strcasecmp($str3,$str4);//�ú�����������ĸ��Сд
?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 12:41
 */
//����Ȼ���򷨽����ַ����ıȽ�
$str1="str2.jpg";
$str2="str10.jpg";
$str3="mrsoft1";
$str4="MRSOFT2";
echo strcmp($str1,$str2)."<BR>";//���ֽڽ��бȽϣ�����1
echo strcmp($str3,$str4)."<BR>";//���ֽڽ��бȽϣ�����1
echo strnatcmp($str1,$str2)."<BR>";//����Ȼ���򷨽��бȽϣ�����-1
echo strnatcmp($str3,$str4);//����Ȼ���򷨽��бȽϣ�����1
?>
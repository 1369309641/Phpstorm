<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 10:56
 */
//Demo23�Ե�
$str="\r\r(:@_@  ��ͼ���׫ΰҵ  չ��������۷� @_@:)     ";
/*echo trim($str);//ȥ���ַ����������ߵĿո�
echo"<br>";//����
echo trim($str,"\r\r(::)");//ȥ���ַ����������ߵ������ַ�\r\r(::)
echo"<br>";//����*/
echo ltrim($str);//ȥ���ַ�����ߵĿո�
echo"<br>";//����
echo ltrim($str,":@_@");//ȥ���ַ�����ߵ������ַ�@_@
echo"<br>";//����
/*echo rtrim($str);//ȥ���ַ����ұߵĿո�
echo"<br>";//����
echo rtrim($str,"(@_@:");//ȥ���ַ����ұߵ������ַ�@_@*/
?>
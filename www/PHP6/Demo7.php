<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/2 0002
 * Time: 18:29
 */
echo"����(\$string1)ֱ�Ӹ�ֵΪnull:";
$string1 = null;//����$string1������ֵ
$string3 = "str";//����ֵstr
if(is_null($string1))//�ж�$string1�Ƿ�Ϊ��
    echo "string1=null";
    echo"<p>����($string2)δ����ֵ��";
    if(is_null($string2))//�ж�$string2�Ƿ�Ϊ��
        echo"string2=null";
    echo"<P>��unset()����������ı�����\$string3):";
    unset($string3);
if(is_null($string3))
    echo"string3=null";
?>
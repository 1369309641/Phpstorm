<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 16:31
 */
//��ʵ��Ӧ��array_unique()����ɾ���������ظ���Ԫ��
$array_push = array("PHP �����ŵ���ͨ","PHP�����ֲ�","PHP������ȫ","PHP������");
                        //��������
array_push($array_push,"PHP������ȫ","PHP������");//�������
print_r($array_push);//�������
echo"<br>";
$result = array_unique($array_push);//ɾ���������ظ���Ԫ��
print_r($result);//���ɾ���������
?>
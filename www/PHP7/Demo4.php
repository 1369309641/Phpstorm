<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 13:47
 */
function values($price,$tax=0.45){//����һ��������������һ��������Ĭ��ֵ
    $price=$price+($price*$tax);//����һ������$price����������������������
    return $price;}//���ؽ��
echo values(100);//���ú���
?>
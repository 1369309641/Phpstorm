<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 13:13
 */
function example(&$m){//����һ������,ͬʱ���ݲ�����m
    $m=$m*5+10;
    echo"�ں�����:\$m=".$m;//����βε�ֵ
}
$m=1;
example($m);//����ֵ����$m��ֵ���ݸ��β�$m
echo"<p>�ٺ�����\$m=$m<p>";//ʵ�ε�ֵ�����仯�����m=15
?>

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3 0003
 * Time: 13:00
 */
$a="���ῴ��";//����ȫ�ֱ���$a
$b="�ῴ��";//����ȫ�ֱ���$b
function lxt(){
    echo $a."<BR>";//$a���ܱ����ã�û�����
    global $b;//���ùؼ��� global�ں����ڲ�����ȫ�ֱ���
    echo $b."<br>";
}
lxt();
?>
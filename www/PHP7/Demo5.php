<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 14:05
 */
function &example($tmp=0){//����һ������+&����
    return $tmp;//���ز���$tmp
}
$str=&example("������");//����һ������������$str
echo $str."<p>";//���$str
//�Ͳ������ݲ�ͬ����������������ط�ʹ��&��������˵�����ص���һ������
?>
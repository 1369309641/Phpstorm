<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 13:23
 */
function values($price,$tax=""){//����һ�����������е�һ��������ʼֵΪ��
    $price=$price+($price*$tax);//����һ������$price����������������������
    echo "�۸�$price<br>";//����۸�
}
values(100,0.25);//Ϊ��ѡ������ֵ0.25
values(100);//û�и���ѡ������ֵ
values(300);
values(500);
?>

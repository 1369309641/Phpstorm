<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 13:18
 */
//Ĭ�ϲ�������ѡ������
function values($price,$tax=""){
    $price=$price+($price*$tax);
    echo "�۸�$price<br>";
}
values(100,0.25);
values(100);
?>

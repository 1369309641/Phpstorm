<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 11:58
 */
if(strlen($_POST['pwd'])<6){
    echo "<scrip>alert('�û�����ĳ��Ȳ�������6λ������������');history.back();</scrip>";
}
else{
    echo "�û���Ϣ����Ϸ���";
}
?>
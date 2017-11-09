<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 11:58
 */
if(strlen($_POST['pwd'])<6){
    echo "<scrip>alert('用户密码的长度不得少于6位！请重新输入');history.back();</scrip>";
}
else{
    echo "用户信息输入合法！";
}
?>
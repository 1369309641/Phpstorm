<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 13:23
 */
function values($price,$tax=""){//定义一个函数，其中的一个参数初始值为空
    $price=$price+($price*$tax);//声明一个变量$price，等于两个参数的运算结果
    echo "价格：$price<br>";//输出价格
}
values(100,0.25);//为可选参数赋值0.25
values(100);//没有给可选参数赋值
values(300);
values(500);
?>

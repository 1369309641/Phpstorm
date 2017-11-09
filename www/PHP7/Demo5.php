<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 14:05
 */
function &example($tmp=0){//声明一个函数+&符号
    return $tmp;//返回参数$tmp
}
$str=&example("看到了");//声明一个函数的引用$str
echo $str."<p>";//输出$str
//和参数传递不同，这里必须在两个地方使用&符号用来说明返回的是一个引用
?>
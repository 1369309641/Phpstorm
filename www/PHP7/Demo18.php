<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 12:10
 */
//截取超长字符串
$text="祝全国程序开发人员在编程之路上一帆风顺二龙腾飞三阳开泰四季平安五福临门六六大顺七星高照八方来财九九同心十全十美";
if(strlen($text)>30){//如果文本的字符串长度大于30个字节
    echo substr($text,0,30)."...";//输出文本的前30个字节，然后输出...
}
else{
    echo $text;//小于30字节则直接输出文本
}
?>
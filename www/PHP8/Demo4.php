<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 13:55
 */
//本实例使用explode()函数将"时装、休闲、职业装"字符串按照“、”进行分隔
$str = "时装、休闲、职业装";
$strs = explode("、",$str);
print_r($strs);
?>
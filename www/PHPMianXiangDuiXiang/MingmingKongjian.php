<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30 0030
 * Time: 18:26
 */
//命名空间
namespace Book;
/*header('content-type:text/html;charset=utf-8');*/
//根命名空间\
function strtoupper($str){
    return $str.'my';
}

echo \strtoupper('aBcd');//调用系统的，绕过自定义命名空间


?>
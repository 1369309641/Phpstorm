<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/23 0023
 * Time: 5:24
 */
function p($var){
    echo'<pre>';//原样输出
    print_r($var);
    echo'</pre>';

}
function dd($var){
    echo'<pre>';//原样输出
    var_dump($var);
    echo'</pre>';
    die;

}
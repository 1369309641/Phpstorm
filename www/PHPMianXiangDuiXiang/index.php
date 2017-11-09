<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31 0031
 * Time: 18:28
 */
//类的自动加载
spl_autoload_register("myLoad");
function myLoad($clsName){
    include "{$clsName}.php";
}

$conn = new Db;
$conn -> sql();

?>
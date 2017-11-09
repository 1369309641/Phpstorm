<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/4 0004
 * Time: 13:19
 */
require_once("A.php");
require_once("B.php");
require_once("C.php");

/*$a_app =new a\b\c\Apple();这种方法不够简洁，多次调用会造成代码臃肿*/

use a\b\c\Apple;
use d\e\f\Apple as BApple;

$a_app = new Apple();
$a_app2 = new Apple();
$a_app3 = new Apple();
/*$a_app ->get_info();*/


$b_app = new BApple();
/*$b_app ->get_info();*/

$c_app = new \Apple();//通过反斜杠调用顶层命名空间
$c_app ->get_info();
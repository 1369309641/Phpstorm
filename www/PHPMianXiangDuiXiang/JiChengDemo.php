<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31 0031
 * Time: 15:09
 */
class Tp1{
    function header(){
        echo 1;
    }
    function body(){
        echo 2;
    }
    function footer(){
        echo 3;
    }
    function show(){
        $this -> header();
        $this -> body();
        $this -> footer();
    }
}

class  Tp2 extends Tp1{
    function body()
    {
        echo 202020;//替换原来的值2
    }
}

$tp = new tp2();
$tp -> show();
?>
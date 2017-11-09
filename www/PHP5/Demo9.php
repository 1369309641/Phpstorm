<?php
   //超级全局变量

    $GLOBALS['a']=5;
    function fa(){
        
     $GLOBALS['a']=2;
        
    }
    fa();
    //echo $GLOBALS['a'];
    print_r($GLOBALS);
    //print_r($GLOBALS['a']);






?>
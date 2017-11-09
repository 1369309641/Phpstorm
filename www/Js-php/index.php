<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/6 0006
 * Time: 18:47
 */
//类的延迟加载

function my_loader($class){
   /* require ('class\Class1.php');类还是多余加载
    require ('class\Class2.php');*/
      require ('class\\'.$class.'.php');

}
Spl_autoLoad_register('my_loader');//注册my_loader函数-basic->vender->yiisoft->yii2->yi.php

$is_girl = $_GET['sex'] == 0 ? true:false;

if($is_girl){
    echo 'this is a girl';
    //require ('class\Class1.php');//放在实例化前比放在头部效率有所提升
    $class1 = new Class1();
}else{
    echo 'not a girl';
    //require ('class\Class2.php');
    $class2 = new Class2();
}

?>
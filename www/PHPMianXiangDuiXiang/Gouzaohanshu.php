<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30 0030
 * Time: 19:58
 */
//构造函数，会在使用new创建对象时自动调用
class Db{
    function __construct(){//两个下划线
        echo '666'.'<br>';

    }
    function  __destruct()//析构函数
    {
        unset($d1);//表示显示提前销毁，先输出
     echo'999';//程序末尾执行或者程序销毁后执行   // TODO: Implement __destruct() method.
    }
}
/*后面创建的先销毁*/
$d1 = new Db;
echo 'hello,world'.'<br>';
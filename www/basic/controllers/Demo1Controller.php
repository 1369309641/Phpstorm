<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/6 0006
 * Time: 19:25
 */
//类的映射表机制class map
namespace  app\controllers;
use yii\web\Controller;
use app\models\Test;
use app\models\Customer;
use app\models\Order;

class Demo1Controller extends  Controller{

    public  function  actionIndex(){
        \yii::$classMap['app\models\Order']='D:\wamp64\www\basic\models\Order.php';
        $order = new Order;//执行自动加载的函数-autoload($class)

    }
}
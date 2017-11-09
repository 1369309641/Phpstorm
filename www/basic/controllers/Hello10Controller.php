<?php
namespace app\controllers;
use yii;
use yii\web\Controller;
use app\models\Test;
use app\models\Customer;
use app\models\Order;
class Hello10Controller extends Controller{
    public function actionIndex()
    {//关联查询结果缓存
     //$customer = Customer::find()->where(['name'=>'zhangsan'])->one();
     //$orders = $customer->orders;//执行了select * from order where customer_id=...这段sql语句
     //unset($customer->orders);//unset方法释放缓存
     //$orders2 = $customer->orders;



        //关联查询的多次查询
        //select * from customer
        //select * from order where customer_id in...（...所有顾客id的集合）
        $customers = Customer::find()->with('orders')->all();//select * from customer,with（参数）方法
        foreach ($customers as $customer){
            $orders = $customer->orders;//select * from order where customer_id=...
        }
    }
}
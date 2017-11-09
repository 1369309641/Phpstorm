<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/6 0006
 * Time: 20:29
 */
//数据缓存之增删改查
namespace  app\controllers;
use yii\web\Controller;
use app\models\Test;
use app\models\Customer;
use app\models\Order;

class Demo2Controller extends  Controller{

    public  function  actionIndex(){
        //获取缓存组件
        $cache = \Yii::$app->cache;

        //往缓存中写数据
        //$cache->add('key1','hello world!');
       // $cache->add('key1','hello world2!');//两个key一样第二条不执行

        //修改缓存数据
        //$cache->set('key1','hello world2');

        //删除缓存数据
       // $cache->delete('key1');


        //清空缓存数据
       // $cache->flush();


        //读缓存
        //$data = $cache->get('key1');
        /*print_r($data);*/
       // var_dump($data);


        //缓存数据的有效期设置
        //$cache->add('key','hello world',15);
        // $cache->set('key','hello world333',15);//方法2
         echo $cache->get('key');//过了十五秒自动化消失
    }
}
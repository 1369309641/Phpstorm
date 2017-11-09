<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/4 0004
 * Time: 16:52
 */
//控制器-cookie处理
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

class Hello3Controller extends Controller{
    public function actionIndex(){
        //$cookies = \YII::$app->response->cookies;
       // $cookie_data = array('name'=>'user','value'=>'li3');//修改cookie的数据直接在value改值
       // $cookies->add(new Cookie($cookie_data));
        //删除指定的cookie数据
        //$cookies->remove('pgv_pvi');


        $cookies = \YII::$app->request->cookies;
        //取数据
        echo $cookies->getValue('user','lili(20数值型无需‘’)');//如果user不存在，则会输出后面的默认
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/4 0004
 * Time: 16:14
 */
//控制器-session处理
namespace app\controllers;
use yii\web\Controller;

class  Hello2Controller extends Controller{

    public  function actionIndex(){
        $session = \YII::$app->session;

        $session->open();//打开session
        /*if($session->isActive){
         echo 'session is Active';
        }*///做判断session是否开启

        //往$session存放数据
        //$session->set('user','张三');//两个参数-名字，值
        //取数据
        //echo $session->get('user');
        //删除数据
        //$session->remove('user');



        //方法2：把session当成一个数组存放数据
        /*$session['user']='张三';
        //在浏览器中显示出来
        echo $session['user'];*/
        //删除刚刚的数据
        //unset($session['user']);





        //session识别原理(可以识别不同的浏览器发来的数据，根据PHPESSID(f12-app-cookie))
       // $session['user']='张三';
        echo $session['user'];

    }
}
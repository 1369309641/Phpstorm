<?php

//视图-数据传递
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

class Hello5Controller extends Controller{
    public function actionIndex(){
        //字符串传递给视图的方法
        $hello5_str = 'Hello God!';
        //传递一个数组给视图
        $test_arr = array(1,2);

        //创建一个数组
        $data = array();

        //把需要传递给视图的数据，放到数组当中
        $data['view_hello5_str']/*代表一个Key */= $hello5_str;
        $data['view_test_arr'] = $test_arr;

        return $this->renderPartial('index',$data);
    }
}

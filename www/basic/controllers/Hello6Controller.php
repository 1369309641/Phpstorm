<?php

//视图-数据安全
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

class Hello6Controller extends Controller{
    public function actionIndex(){
        //字符串传递给视图的方法
        $hello6_str = 'Hello God!<script>alert(3);</script>';


        //创建一个数组
        $data = array();

        //把需要传递给视图的数据，放到数组当中
        $data['view_hello6_str']/*代表一个Key */= $hello6_str;

        return $this->renderPartial('index',$data);
    }
}

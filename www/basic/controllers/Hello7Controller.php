<?php

//视图-布局文件
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

class Hello7Controller extends Controller{
    public $layout = 'common';//显示common布局文件
    public function actionIndex(){
        return  $this->render('about');//render方法在显示视图文件时会把内容放到$content的变量中，会把布局文件显示出来（上面的common）
        return  $this->render('index');
    }
}

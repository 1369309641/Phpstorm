<?php

//视图-在视图中显示另外一个视图
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

class Hello8Controller extends Controller{
    public $layout = 'common';//显示common布局文件
    public function actionIndex(){
        return  $this->renderPartial('index');//render方法在显示视图文件时会把内容放到$content的变量中，会把布局文件显示出来（上面的common）

    }
}
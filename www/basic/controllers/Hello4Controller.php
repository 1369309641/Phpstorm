<?php

//视图-视图的创建
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

class Hello4Controller extends Controller{
    public function actionIndex(){
       /* echo '<h1>hello world!</h1>';*/

       return $this->renderPartial('success');//调用展现view目录下对应视图文件的方法success.php后的.php可以不写
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/18 0018
 * Time: 21:09
 */

namespace app\controllers;
use yii;
use yii\web\Controller;
//控制器-响应处理
class Hello1Controller extends Controller {
    public function actionIndex(){
        $res = \Yii::$app->response;//响应组件
        //$res->statusCode='404';状态码，没有设置的话默认是200

        //对http头的处理
        //$res -> headers ->add('pragma','no-cache');
       // $res -> headers ->set('pragma','max-age=5');
        //$res -> headers ->remove('pragma');

        //跳转
       /* $res -> headers ->add('location','http://www.baidu.com');*/
        //$res->headers->add('localtion','http://www.baidu.com');//不成功
       // $this->redirect('http://www.baidu.com',302);

        //文件下载
        //$res -> headers ->add('content-disposition','attachment;filename="a.jpg"');
       // $res->sendFile(\Yii::getAlias('@app').'/robots.txt');//Yii 预定义了一系列别名来简化常用路径和 URL 的使用：
        $res->sendFile('E:\test.txt');//系统下的-全路径

    }
}
<?php /**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/21 0021
 * Time: 13:55
 */
namespace app\controllers;
use yii;
use yii\web\Controller;
class IndexController extends Controller{
    public function actionIndex()
    {
       \Yii::beginProfile('profile1');
       echo  'miaojianangege';
       sleep(1);//睡眠一秒钟
        \Yii::endProfile('profile1');
        return $this->render('index');

    }
}















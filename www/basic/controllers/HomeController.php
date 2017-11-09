<?php /**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/21 0021
 * Time: 13:55
 */
namespace app\controllers;
use app\models\Article;
use yii;
use yii\web\Controller;
class HomeController extends Controller{
    public $layout = 'home';
    public function actionIndex()
    {
       /* $sql = "select * from article where id=1";
        $r = Article::findBySql($sql)->all();
        dd($r);*/

       $date = Article::find()->where(['id'=>5])->all();
       dd($date);
        return $this->render('index');
    }
    public function actions()
    {
        return $this->render('hello7');
    }
}

























/* $date=[
         'name'=>'miaojianan',
           'age'=>22,
       ];
     p($date);*/

    $request=\Yii::$app->request;
    //$id=$request->get('id',1);
    //dd($id);
    /*$article = [
        'title'=>'后盾网，收费网站',
    ];

        $user = [
            'username'=>'miaojianan',
            'age'=>'22',
        ];
        $data = [
            'user'=>$user,
           'article'=>$article
        ];*/
       /* $data = [
            'str'=>'hello woeld<script>alert(1)</script>',

        ];*/
   /* return $this->renderPartial('index',$data);*/

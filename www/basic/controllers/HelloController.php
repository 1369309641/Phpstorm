<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/18 0018
 * Time: 21:09
 */

namespace app\controllers;
use app\models\Test;
use yii;
use yii\web\Controller;
//控制器的创建，在入口文件运行后加?r=?r=hello/index

class HelloController extends Controller /*子类完全继承了父类*/{
    public function actionIndex(){
       // $request/*变量*/ = \yii /*全局的类使用前面要加\*/ ::$app/*应用主体*/->request;//请求组件
       //请求处理&id=3,没有就输出20，
       // echo $request->get('id',20);
       // $request->post('name',66);

       // echo 'hello world';


        /* //判断请求类型的方式
       if($request->isGet){
            echo 'this is get method!';
        }*/
       // echo $request->userIP;



//数据模型之表单查询
       //查询数据
        //$id='1 or 1=1';//页面用户传递的数据
        /*$sql = 'select * from test where id=:id';//占位符
        $results = Test:: findBysql($sql,array(':id'=>'1 or 1=1'))->all();*///此处的1会替换上面的占位符-防止sql注入




       //查询id=1
       /* $results = Test::find()->where(['id'=>1])->all();
        print_R($results);*/



        //查询id>0
       /* $results = Test::find()->where(['>','id',0])->all();
        print_R($results);*/




        //查询id>=1且id<=2
       /* $results = Test::find()->where(['between','id',1,2])->all();
        print_R(count($results));*/



        //查询title    title like'%title%'
       /* $results = Test::find()->where(['like','title','title'])->all();
        print_R(count($results));*/



        //查询结果对象转数组，降低内存第一种方式
        /*$results = Test::find()->where(['between','id',1,2])->asArray()->all();
        print_R($results);*/




        //第二种方式：批量查询需要和foreach配合使用
        foreach(Test::find()->batch(1)/*指定到数据库拿记录次数*/ as $tests){
        print_R(count($tests));;
      }
    }

}
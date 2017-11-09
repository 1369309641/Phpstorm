<?php /**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/21 0021
 * Time: 13:55
 */
namespace app\controllers;
use yii;
use yii\web\Controller;
use app\models\Test;
use app\models\Customer;
use app\models\Order;
class DemoController extends Controller{
    public function actionIndex()
    {
        //删除数据-活动记录删除
        /*$results = Test::find()->where(['id'=>1])->all();
        $results[0]->delete();//删除第1条数据*/
        //方法2
       // Test::deleteAll('id>:id/*(占位符)*/',array(':id'=>3));






      //数据模型之单表添加数据-增加数据
      /*$test = new Test();//通过new实例化Test数据模型保存到一个变量当中
      $test->id='4';//验证器见models-Test.php限制条件
      $test->title='title1';
      $test->validate();//这个方法启用验证器，判断是否符合保存条件
      if($test->hasErrors()){
          echo 'date is Error!';//判断数据校验时的错误，有错就输出
          die;//结束程序，不让它保存
      }
      $test->save();//调用test 的sava方法把数据保存到表当中*/






        //数据模型之单表数据修改
       /* $test = Test::find()->where(['id'=>4])->one();//通过活动记录去修改
        $test->title='title4';
        $test->save();*///Test.php中代码注释了防止出错






        //数据模型之关联查询
        //根据顾客查询她的订单信息
       /* $customer = Customer::find()->where(['name'=>'zhangsan'])->one();
        //$orders = $customer->hasMany('app\models\Order'/*Order::className(),['customer_id'=>'id'])->asArray()->all();*/

        //$orders = $customer->getOrders();
        //$orders = $customer->orders;//有这个存在就要舍去Customer.php中的all

        //根据订单查询顾客的信息
        $order = Order::find()->where(['id'=>1])->one();
        // $customer = $order->getCustomer()->one();
        $customer = $order->customer;

        print_r($customer);
    }
}


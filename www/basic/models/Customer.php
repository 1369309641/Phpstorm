<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/28 0028
 * Time: 20:25
 */
namespace app\models;
use yii\db\ActiveRecord;
class Customer  extends ActiveRecord
{//表示活动记录-存在于一个命名空间
    //帮助顾客获取订单信息
   public function getOrders(){//一对多
       $orders = $this->hasMany(Order::className(),['customer_id'=>'id'])->asArray()/*->all()*/;
       return $orders;
   }
}
?>
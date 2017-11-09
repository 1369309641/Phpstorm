<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/28 0028
 * Time: 20:25
 */
namespace app\models;
use yii\db\ActiveRecord;
class Order  extends ActiveRecord
{//表示活动记录-存在于一个命名空间
   //根据订单查询顾客的信息
    public function getCustomer(){
       return $this->hasOne(Customer::className(),['id'=>'customer_id'])->asArray();//一对一
    }
}
?>
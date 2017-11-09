<?php
use yii\helpers\Html;//两个类
use yii\helpers\HTMLPurifier;
?>
<h1><?=Html::encode($view_hello6_str);?></h1>//通过转义的方式去避免脚本攻击
<h1><?=HTMLPurifier::process($view_hello6_str);?></h1>//过滤JavaScript代码

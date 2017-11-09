<?php
 //创建自定义键（key）的数组
 
//如果你不去声明元素的Key，那么从0开始计算
$userName=array('123'=>'哥哥','456'=>'弟弟','888'=>'缪建安','嘿嘿');
//print_r($userName);
echo $userName[123];
echo '<br>'.$userName[456];
echo '<br>'.$userName[888];
?>
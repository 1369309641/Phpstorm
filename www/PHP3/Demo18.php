<?php
$userAge=array('吴奇','李彦辉','缪建安');
//current默认情况下，指针在第一条数据
//获取指针当前元素,current并不会将指针移动到下一步
//echo current($userAge);

//将数组的指针向前移动一位
 echo  next($userAge);
 echo current($userAge);
 echo  next($userAge);
 echo current($userAge);
 //echo reset($userAge);//重新指向第一个指针位置
 echo prev($userAge);
 echo sizeof($userAge);//和count一样
?>
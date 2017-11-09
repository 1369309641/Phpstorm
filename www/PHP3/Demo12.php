<?php

  //sort — 对数组排序(包括对中文的排序)
 /*  $fruit =array("banana","orange","apple");
  //没有排序前一般是按key顺序显示
  //print_r($fruit);
  
  sort($fruit);
  //排序之后
  print_r($fruit);
   */
  



 /* $userAge=array('吴奇','李彦辉','建安');

 print_r($userAge);
 echo '<br>';
 sort($userAge);
 print_r($userAge);
 */
 


//排序前
 $numbers=array(22,55,267,15,89,8,44,166,488,799,0,33,655,777);
print_r($numbers);
echo '<br>';
//以下是对数字进行排序后
/* $numbers=array(22,55,267,15,89,8,44,166,488,799,0,33,655,777);
sort($numbers);
print_r($numbers);  */
$numbers=array(22,55,267,15,89,8,44,166,488,799,0,33,655,777);
rsort($numbers);//反向排序（逆序）
print_r($numbers);





/* $numbers=array('2','12');//此处数字可被看做数值或者字符串
sort($numbers);
print_r($numbers); */

/*  $numbers=array(2,12);//此处数字可被看做数值或者字符串
sort($numbers,SORT_NUMERIC);//此处数字被看做数值，看整体大小排序
print_r($numbers);  */

/* $numbers=array('2','12');//此处数字可被看做数值或者字符串
sort($numbers,SORT_STRING);//此处数字被看做字符串(只看第一位)
print_r($numbers); */

?>
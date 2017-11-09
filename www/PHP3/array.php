<?php
//创建一个数组变量
//$userNames=array('李彦宏','周宏伟','马云','俞敏洪','李开复','缪建安');
//将这个数组打印出来
/* echo $userNames[3];//不加2则打印出的是类型
echo '<br>马云'; */
/* print_r($userNames); *///print_r — 打印关于变量的易于理解的信息。 
// echo $userNames[5];
/* $userNames[5]='帅哥';
print_r($userNames);
 */
 

//range包含指定数组，包含键（默认从0开始，每次加1）和值（自己赋值）
 /* $arr=range(1,10);
 print_r($arr); */
 
$letters=range('a', 'z');
//print_r($letters);
echo($letters[15]);

?>
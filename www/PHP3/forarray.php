<?php

//$userNames=array('李彦宏','周宏伟','马云','俞敏洪','李开复','缪建安');
$userNames='缪建安';
//通过循环来显示数组的所有值
/* for ($i=0;$i<count($userNames);$i++){
 
 echo ($i+1).'----' . $userNames[$i];
 echo '<br>'; 
    
}*/

//通过foreach循环来遍历数组，这方式好处，不需要去考虑key
//foreach遍历 $key=>$value
/* foreach ($userNames as $aaa =>$bbb){
    echo $bbb.'<br>'; */
    
if(is_array($userNames)){//判断一下是不是数组
foreach ($userNames as $key =>$value){
    echo $key.'---'. $value.'<br/>';}
}else{
    echo $userNames;
}





?>
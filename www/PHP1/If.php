<?php

$userAge=21;
//{}块语句，后面的括号跟的是布尔表达式，返回结果是1或空
/* if($userAge>18){
    echo "你成年了！";
} */

 /* if($userAge>18){
    echo "你成年了！";
}
else {
    echo "你还没成年！";
}  */
//多重线路
//下面语句逻辑有错误
 if($userAge>18&&$userAge<20){
    echo "你成年了！";
}
elseif($userAge==18){
    echo "刚好成年了！";
}
else {
    echo "你还没成年！";
    }
?>
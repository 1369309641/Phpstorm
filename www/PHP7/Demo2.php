<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 13:18
 */
//默认参数（可选参数）
function values($price,$tax=""){
    $price=$price+($price*$tax);
    echo "价格：$price<br>";
}
values(100,0.25);
values(100);
?>

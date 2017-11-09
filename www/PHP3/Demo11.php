<?php

$products=array(

    array("产品名"=>"苹果","数量"=>6,"价格"=>28.8),
    array("产品名"=>"猪肉","数量"=>2,"价格"=>32.6),
    array("产品名"=>"饼干","数量"=>3,"价格"=>45.3),
);

    //print_r($products);
    //echo $products[0]['价格'];//用for循环不能打印出，因为键值已经改变

/* for ($i=0;$i<count($products);$i++){
    foreach ($products[$i] as $key => $value){
        echo $key.":".$value."|";
    }
    echo '<br>';
        
} */


for ($i=0;$i<count($products);$i++){
    while (!!list($key,$value)=each($products[$i])){
       echo $key.":" .$value."|";
    }
    
    echo '<br>';
}
?>
<?php

$products=array(

    array("��Ʒ��"=>"ƻ��","����"=>6,"�۸�"=>28.8),
    array("��Ʒ��"=>"����","����"=>2,"�۸�"=>32.6),
    array("��Ʒ��"=>"����","����"=>3,"�۸�"=>45.3),
);

    //print_r($products);
    //echo $products[0]['�۸�'];//��forѭ�����ܴ�ӡ������Ϊ��ֵ�Ѿ��ı�

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
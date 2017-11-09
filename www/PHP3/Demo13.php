<?php

/* //asort — 对数组进行排序并保持索引关系
 * $fruit =array("banana","orange","apple");
asort($fruit);//加r逆序输出
print_r($fruit);
echo '<br>';
$fruit =array("banana","orange","apple");
sort($fruit);
print_r($fruit); */


//ksort — 对数组按照键名排序
$fruit =array("c"=>"banana","a"=>"orange","b"=>"apple");
sort($fruit);
print_r($fruit);
echo '<br>';
$fruit =array("c"=>"banana","a"=>"orange","b"=>"apple");
krsort($fruit);//加r逆序输出
print_r($fruit);
?>
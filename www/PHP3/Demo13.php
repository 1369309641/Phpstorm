<?php

/* //asort �� ������������򲢱���������ϵ
 * $fruit =array("banana","orange","apple");
asort($fruit);//��r�������
print_r($fruit);
echo '<br>';
$fruit =array("banana","orange","apple");
sort($fruit);
print_r($fruit); */


//ksort �� �����鰴�ռ�������
$fruit =array("c"=>"banana","a"=>"orange","b"=>"apple");
sort($fruit);
print_r($fruit);
echo '<br>';
$fruit =array("c"=>"banana","a"=>"orange","b"=>"apple");
krsort($fruit);//��r�������
print_r($fruit);
?>
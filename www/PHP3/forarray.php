<?php

//$userNames=array('�����','�ܺ�ΰ','����','������','���','�ѽ���');
$userNames='�ѽ���';
//ͨ��ѭ������ʾ���������ֵ
/* for ($i=0;$i<count($userNames);$i++){
 
 echo ($i+1).'----' . $userNames[$i];
 echo '<br>'; 
    
}*/

//ͨ��foreachѭ�����������飬�ⷽʽ�ô�������Ҫȥ����key
//foreach���� $key=>$value
/* foreach ($userNames as $aaa =>$bbb){
    echo $bbb.'<br>'; */
    
if(is_array($userNames)){//�ж�һ���ǲ�������
foreach ($userNames as $key =>$value){
    echo $key.'---'. $value.'<br/>';}
}else{
    echo $userNames;
}





?>
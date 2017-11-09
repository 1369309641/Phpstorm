<?php
//$sum=0;
 /* for($a=0;$a<=100;$a++){
    
     $sum+=$a;
     
 }
     echo$sum;
 */
 for($a=1;$a<=10;$a++){
    
     if ($a==5){
         //break;//退出循环体，还会继续执行循环外的语句
         //exit;//退出程序
         continue;//退出当前本次循环，并且继续下一次循环
     }
    // $sum+=$a;
    //echo "<br/>";
     echo $a."<br/>";
 }
 echo "这条语句还会继续执行"
     //exit时退出整个程序就不会再执行了
     
     //echo$sum;
?>
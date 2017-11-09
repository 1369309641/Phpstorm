<?php

    //这个函数要返回多个数据，用数组
    //函数里的变量和函数外的变量没有任何联系，所以重名无所谓
     function  functionInfo($name,$age,$job){
         
        //return 1;
        /*  $userInfo = array($name,$age,$job);
         return $userInfo; */
         
         $userInfo[]=$name;
         $userInfo[]=$age;
         $userInfo[]=$job;
         return $userInfo;
     }
    // print_r(functionInfo('吴奇',19,'学生'))
     
     //调用函数
   //  print_r(functionInfo('吴奇',19,'学生'));
    /*  $arr=functionInfo('吴奇',19,'学生');
     echo $arr[0];
      */
     
     
     
  
     list($name,$age,$job)=functionInfo('吴奇', 19, '学生');
     echo $name.'今年'.$age.'岁了,'.'他还是个'.$job;
     
?>
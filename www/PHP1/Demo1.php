<?php
 $username="wq";
 echo "his name is $username";
 echo"<br/>";
 $username="吴奇";
 echo "his name is $username,";//除非是下面这样的格式，否则中文符号会出错
 echo"<br/>";
 //echo "his name is $username"."，他今年19岁了"//这一行的逗号是中文格式下的
 //echo "his name is ".$username."，他今年19岁了"
 //br是网页上换行，而\n是源代码换行，\t制表符，\r回车，\\反斜杠，\$美元符，\""双引号
 echo "虽然他qq上有很多女孩,\t但是她一个都不认识";

 ?>
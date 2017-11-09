<?php
$host = '127.0.0.1';
$user = 'root';
$pwd = '';
$dbname='msg';
$db = new mysqli($host,$user,$pwd,$dbname);
/*if($db -> connect_error <> 0){
    echo "连接失败,";
    echo "$db -> connect_error";
}*/
$sql = "insert into student(sno,sname,cno) VALUES ('08','wb','888')";
/*$sql = "delete from student where sno=8";*/
/*$sql = "update student set sno='6',sname='up',cno='666'where sname='tp'";*/
$db->query($sql);
/*var_dump($db);*/
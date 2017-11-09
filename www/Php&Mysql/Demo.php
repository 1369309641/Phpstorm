<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/2 0002
 * Time: 17:05
 */
//通过php连接mysql数据库
mysql_connect("localhost","root","root0714");
//选择数据库
 mysql_select_db("mydatebase");
//修改mysql客户端和连接字符集
mysql_query("set names utf8");
//通过PHP进行insert操作
$user_qq='136';
$user_name='miaojianan';
$user_sex='男';
$user_birthday='1995-07-14';
$user_phone='15259158113';
$sql ="insert into users(user_qq,user_name,user_sex,user_birthday,user_phone) 
values ('$user_qq','$user_name','$user_sex','$user_birthday','$user_phone')";
mysql_query($sql);
var_dump(mysql_query($sql));
mysql_close($conn);
?>
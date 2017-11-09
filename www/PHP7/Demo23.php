<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5 0005
 * Time: 13:34
 */

$str=" (:@_@ 脚本之家 提供大量优秀脚本及素材供读者下载 \n\n @_@:)  ";
 echo ltrim($str);
 echo "<br>";
 echo ltrim($str," (:@_@ ");
 echo "<br/>";
 echo rtrim($str);
 echo "<br>";
 echo rtrim($str," @_@:) ");
?>
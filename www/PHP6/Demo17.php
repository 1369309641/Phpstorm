<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3 0003
 * Time: 13:21
 */
$a=-100;
$b=50;
$c=30;
echo"\$a=".$a.",";
echo"\$b=".$b.",";
echo"\$c=".$c."<P>";
echo"\$a + \$b=".($a+$b)."<br>";
echo"\$a - \$b=".($a-$b)."<br>";
echo"\$a * \$b=".($a*$b)."<br>";
echo"\$a / \$b=".($a/$b)."<br>";
echo"\$a % \$c=".($a%$c)."<br>";
echo"\$a++=".$a++." ";
echo "运算后\$a的值为：".$a."<br>";
echo"\$b-=".$b--." ";
echo "运算后\$b的值为：".$b."<br>";
echo"++\$c=".++$c." ";
echo "运算后\$c的值为：".$c;
?>
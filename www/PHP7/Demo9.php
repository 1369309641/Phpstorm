<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 16:07
 */
/*switch ($_GET(imbs)){
    case"最新商品":
      include"new.php";
    break;
    case"热门商品":
        include"jollification.php";
        break;
    case"推荐商品":
        include"commend.php";
        break;
    case"订单查询":
        include"order_form.php";
        break;
        default://判断当该值等于空时，执行下面的语句
        include"new.php";
        break;
   }*/



$name = array("1"=>"智能机器人","2"=>"数码相机","3"=>"天翼手机","4"=>"瑞士手表");
$price = array("1"=>"14998元","2"=>"2588元","3"=>"2666元","4"=>"66698元");
$counts = array("1"=>"1","2"=>"1","3"=>"2","4"=>"1");
echo'<table width="580" border="1" cellspacing="1" bordercolor="#FFFFFF",bgcolor="#c17e50">
    <tr>
    <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">商品名称</td>
    <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">价格</td>
    <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">数量</td>
    <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">金额</td>
</tr>';
foreach ($name as $key=>$value){
    echo'<tr>
           <td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2">'.$value.'</td>
           <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$pric[$key].'</td>
           <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key].'</td>
           <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key]*$price[$key].'</td>
         </tr>';
}
echo '<\table>';
?>
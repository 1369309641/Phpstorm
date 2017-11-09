<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 14:40
 */
$name = "智能机器人@数码相机@天翼3G手机@瑞士手表";//定义字符串
$price ="14998@2588@2666@66698";
$counts = "1@2@3@4";
$arrayid =explode("@",$name);//将商品ID的字符串转换到数组中
$arraynum =explode("@",$price);//将商品数量的字符串转换到数组中
$arraycount =explode("@",$counts);//将商品数量的字符串转换到数组中
if($POST[Submit]==true){
    $id=$_POST[name];
    $num=$_POST[$counts];
    $key=array_search($id,$arrayid);
    $arraycount[$key]=$num;
    $counts=implode("@",$arraycount);
}
?>
<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#c17e50">
    <tr>
        <td width="145"  align="center" bgcolor="#FFFFFF" class="STYLE1">商品名称</td>
        <td width="145"  align="center" bgcolor="#FFFFFF" class="STYLE1">价格</td>
        <td width="145"  align="center" bgcolor="#FFFFFF" class="STYLE1">数量</td>
        <td width="145"  align="center" bgcolor="#FFFFFF" class="STYLE1">金额</td>
    </tr>
    <?php
    for($i = 0; $i < count($arrayid); $i++) {
        ?>
        <form name="form1_<?php echo $i; ?>" method="post" action="index.php">
            <tr>
                <td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $arrayid[$i]; ?></td>
                <td align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $arraynum[$i]; ?></td>
                <td align="center" bgcolor="#FFFFFF" class="STYLE2">
                    <input name="counts" type="text" id="counts" value="<?php echo $arraycount[$i]; ?>" size="8">
                    <input name="name" type="hidden" id="name" value="<?php echo $arrayid[$i]; ?>">
                    <input type="submit" name="Submit" value="更改"></td>
                <td align="center" class="STYLE2"> <?php echo $arraycount[$i] * $arraynum[$i]; ?></td>
            </tr>
        </form>
        <?php
    }
    ?>
</table>

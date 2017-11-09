<!-- --------定义添加投票表单----------- -->
<form name="form1" method="post" action="">
    <table width="400" border="1" cellpadding="1" cellspacing="1" bordercolor="#FF9900" bgcolor="#CCFF66">
        <tr align="center">
            <td width="98" height="120" >添加投票选项：</td>
            <td width="223" height="120" ><p>
                    <textarea name="content" cols="30" rows="5" id="content"></textarea>
                    <br>
                    <span class="style1">注意：每个选项间用*分隔</span></p></td>
            <td width="61" height="120"><input type="Submit" name="Submit" value="提交"></td>
        </tr>
    </table>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 14:06
 */
if($_POST[Submit]!=""){
    $content = $_POST[content];
    $date=explode("*",$content);
    while (list($name,$value)=each($date)){
        echo'<input type="checkbox" name="checkbox" value="checkbox">';
        echo $value."\n";
    }
}
?>
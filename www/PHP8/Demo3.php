<!-- --------�����û���½��----------- -->
<form name="form1" method="post">
    <table width="323" border="1" cellpadding="1" cellspacing="1" bordercolor="#66CC33" bgcolor="#FFFFFF">
      <tr>
          <td width="118" height="24" align="right" bgcolor="#CCFF33">�û�����</td>
          <td width="192" height="24" bgcolor="#CCFF33"><input name="user" type="text" class="inputcss" id="user" size="24"> </td>
      </tr>
        <tr>
            <td height="24" align="right" bgcolor="#CCFF33">��&nbsp;&nbsp;�룺</td>
            <td height="24" bgcolor="#CCFF33"><input name="pwd" type="password" class="inputcss" id="pwd" size="24"> </td>
        </tr>
        <tr align="center" bgcolor="#CCFF33">
        <td height="24" colspan="2"><input name="submit" type="submit" value="��¼"></td>
        </tr>
    </table>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 1:09
 */
//Сʵ����ҳ��½
//����û���Ϣ
while(list($name,$value)=each($_POST)){
    if($name != "submit"){
       echo "$name=$value<br>";
    }
}
?>
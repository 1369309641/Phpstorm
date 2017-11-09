<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="form1" method="post" action="">
    用户名<input type="text" name="user"   size="20"></td>
    密&nbsp;&nbsp;码<input name="pwd" type="password"  id="pwd" size="20"></td>
    <input name="submit" type="submit" id="submit" value="login">&nbsp;</td>
    </tr>
    </table>
</form>
<?php
 if(isset($_POST["submit"])){
        $submit = $_POST["submit"];
        if($submit == "login"){
            echo "您输入的用户名为：".$_POST["user"]."&nbsp;&nbsp;密码为：".$_POST["pwd"];
        }
    }
?>

</body>
</html>


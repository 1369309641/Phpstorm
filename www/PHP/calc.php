<?php 
	/*  if(isset($_POST['sub'])){
		echo "用户已经提交";	
	}
	
	//var_dump($_POST); */
		
	$sum="";
	switch(isset($_POST['operator'])?$_POST['operator']:null){
	case'+':
		$sum= $_POST['num1'] + $_POST['num2'];
		break;
	case '-':
		$sum= $_POST['num1'] - $_POST['num2'];
		break;
	case 'X':
		$sum= $_POST['num1'] * $_POST['num2'];
		break;
	case '/':
		$sum= $_POST['num1'] / $_POST['num2'];
		break;
	case '%':
		$sum= $_POST['num1'] % $_POST['num2'];
		break;
	}
?>
<html>
	<head>
		<title>简单CALC计算器</title>
		
	</head>
	<body>
		<table border="0" width="500" align="center">
		<form action="calc.php" method="POST">
			<caption> <h1>PHP计算器CALC</h1> </caption>
			
<!-- 			下面制作计算器的第一行，有四列 -->
			<tr>
				
				<!--第一列是第一个运算元 输入框  -->
				<td><input type="text" name="num1" value=""/><br></td>
				
<!-- 			第二列是选择运算符号的下拉表 -->
				<td><select name="operator">
				
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">X</option>
					<option value="/">/</option>
					<option value="%">%</option>
				
				</select></td>
				
<!-- 			第三列制作第二个运算元 输入框 -->
				<td>
					<input type="text" name="num2" value=""/><br></td>
				
<!-- 			第四列框是submit按钮，用户输入后能点击提交 -->
				<td>
					<input type="submit" name="sub" value="点击计算"/>
				</td>
			</tr>
			
<!-- 		接下来制作第二行，将计算结果独占一行，用php接收name属性  -->
		<tr>
<!-- 		colspan属性能设置这一列将占原来的多少列-->
			<td colspan="4">
<!-- 			接下来在结果框中嵌入PHP代码  -->
				<?php echo "计算结果：{$_POST['num1']} {$_POST['operator']} {$_POST['num2']}={$sum}" ?>
			</td>
		</tr>
			
			</form>
		</table>
	</body>
</html>
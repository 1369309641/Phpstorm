<h1>hello index</h1>
<?php
echo $this->render('about',array('v_hello_str'/*key*/=>'helloworld!'));//render方法的第二个参数要求传递的是一个数组
?>
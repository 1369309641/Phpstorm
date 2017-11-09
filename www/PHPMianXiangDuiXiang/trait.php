<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31 0031
 * Time: 20:12
 */
trait Part{
    function say(){
        echo'part';
    }
}
trait PartTwo{
    function move(){

    }
}

class  A{
    use Part,PartTwo;
}
class  B{
    use Part;
}
$a = new A();
$a -> say();
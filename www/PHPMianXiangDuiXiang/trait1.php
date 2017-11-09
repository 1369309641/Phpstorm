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
    function say(){
        echo 'two';
    }
}

class  A{
    use Part,PartTwo{
        PartTwo::say insteadof  Part;
        Part::say as say1;
    }
}
$a = new A();
$a -> say();
$a ->say1();
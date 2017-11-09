<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3 0003
 * Time: 10:53
 */
    define("MESSAGE","能看到一次");
    echo MESSAGE."<BR>";
    echo Message."<BR>";
    define("COUNT","能看到多次",true);
    echo COUNT."<BR>";
    echo Count."<BR>";
    $name="count";
    echo constant($name)."<BR>";
    echo(defined("MESSAGE"))."<BR>";


?>
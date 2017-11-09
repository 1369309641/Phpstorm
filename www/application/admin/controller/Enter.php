<?php

namespace app\admin\controller;

use think\Controller;

class Enter extends Controller
{
    //首页
    public function  index()
    {
        //加载模板文件
       return $this->fetch();
    }
}

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>分页类核心功能学习案例-动力学院</title>
    <style type="text/css">
        /*
        动力学院使用分页类功能CSS
        */





        #page {
            font-size: 12px;
            font-family: microsoft yahei;
        }
        #page a {
            text-decoration: none;
            color: #0000ff;
        }
        #page a:visited {
            color: #666;
        }
        #page a, #page b, #page i, #page span {
            display: inline-block;
            margin: 0px 1px;
            padding: 3px 7px;
            border: 1px #CCCCCC solid;
        }
        #page i {
            border: 1px #CCCCCC solid;
            color: #666;
            font-style: normal;
        }
        #page span {
            background-color: #eee;
            color: #666;
        }
    </style>
</head>

<body>
<?php
//使用案例
include 'pagesDemo.php';
$page = new Pages(91,10);
$html = '<ul>';
$sql = "select * from tbl $page->limit";
for($i=0;$i<10;$i++){
    $html .= "<li>$sql</li>";
}
$html .= '</ul>';
echo $html;
$page->showPage();
?>
</body>
</html>

/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    $(".imgList li").click(function(){
        //var srcstr=$(this).find($("a")).attr("rel");
        ////将字符串转换为json对象
        //var srcobj=eval('(' + srcstr + ')');
        //var srcsmall=srcobj.smallimage;
        //var srclarge=srcobj.largeimage;
        ////变更显示框图片src
        //$("#bigImg").attr("src",srcsmall);
        ////变更放大镜href
        //$(".jqzoom").attr("href",srclarge);
        ////变更遮罩层图片src
        //$("#TB_Image").attr("src",srclarge);
        var index=$(this).index();
        dochangeimg(index);
    })
})
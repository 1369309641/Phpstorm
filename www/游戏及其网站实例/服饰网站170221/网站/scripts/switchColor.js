/**
 * Created by Home on 2016/12/23.
 */
function dochangeimg(startindex){
    var srcstr=$(".imgList li:eq("+startindex+")").find($("a")).attr("rel");
    var srcobj=eval('(' + srcstr + ')');
    var srcsmall=srcobj.smallimage;
    var srclarge=srcobj.largeimage;
    //变更显示框图片src
    $("#bigImg").attr("src",srcsmall);
    //变更遮罩层图片src
    $("#TB_Image").attr("src",srclarge);
    //变更放大镜href
    $(".jqzoom").attr("href",srclarge);
}
$(function(){
    $(".color_change li").click(function(){
        var current=$(this).index();
        //设置颜色文字信息
        $(".color_change strong").html($(this).find("img").attr("alt"))
        if(current==0){
            $(".imgList li").removeClass("hide")
            $(".imgList li:not('.imgList_blue')").addClass("hide");
            dochangeimg(0);
        }else if(current==2){
            $(".imgList li").removeClass("hide")
            $(".imgList li:not('.imgList_green')").addClass("hide");
            dochangeimg(3);
        }else{
            $(".imgList li").removeClass("hide")
            $(".imgList li:not('.imgList_yellow')").addClass("hide");
            dochangeimg(5);
        }
    })
})
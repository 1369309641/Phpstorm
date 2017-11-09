/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    function changeImg(){
        $("#JS_imgWrap img:eq("+current+")").fadeIn().siblings().fadeOut();
        $("#jnImageroll div a:eq("+current+")").addClass("chos").siblings().removeClass("chos");
        current=(current+len+1)%len;
    }
    function stopChange(){
        clearInterval(autoImg)
    }
    var len=$("#JS_imgWrap img").length;
    var current=0;
    var autoImg=setInterval(changeImg,3000);
    $("#jnImageroll div a,#JS_imgWrap img").hover(function(){
        stopChange();
        current=$(this).index();
        changeImg();
    },function(){
        autoImg=setInterval(changeImg,3000);
    })
})

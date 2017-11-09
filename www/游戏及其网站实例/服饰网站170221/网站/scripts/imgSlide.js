/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    var selectLi=$("#jnBrandTab li");
    var box=$("#jnBrandList");
    var currentLeft=0;
    var autoLeft;//手动轮播一次
    $("#jnBrandTab li:eq(0)").addClass("chos").siblings().removeClass("chos");
//手动左轮播
    function imgLeft(newLeft){
        autoLeft=setInterval(function(){
            if(currentLeft==newLeft){
                $("#jnBrandList").css("left","-"+currentLeft+"px")
                clearInterval(autoLeft)
            }else{
                $("#jnBrandList").css("left","-"+currentLeft+"px")
                currentLeft+=78;
            }
        },50)
    }
//手动右轮播
    function imgRight(newLeft){
        autoLeft=setInterval(function(){
            if(currentLeft==newLeft){
                $("#jnBrandList").css("left","-"+currentLeft+"px")
                clearInterval(autoLeft)
            }else{
                $("#jnBrandList").css("left","-"+currentLeft+"px")
                currentLeft-=78;
            }
        },50)
    }
//绑定手动轮播事件
    selectLi.hover(function(){
        clearInterval(autoTime)
        var current=$(this).index();
        var newLeft=current*780;
        $(this).addClass("chos").siblings().removeClass("chos");
        if(newLeft>currentLeft){
            imgLeft(newLeft)
        }else {
            imgRight(newLeft)
        }
    },function(){
        clearInterval(autoLeft)
        autoTime=setInterval(function(){
            autoChange();
            index=(len+index+1)%len;
        },3000)
    })
    var index=1;
    var len=selectLi.length;
//自动左轮播（一次）
    function autoChange(){
        var newLeft=index*780;
        $("#jnBrandTab li:eq("+index+")").addClass("chos").siblings().removeClass("chos");
        if(newLeft>currentLeft){
            imgLeft(newLeft)
        }else {
            imgRight(newLeft)
        }
    }
//定时自动左轮播
    var autoTime=setInterval(function(){
        autoChange();
        index=(len+index+1)%len;
    },3000)
})

/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    var selectLi=$("#jnBrandTab li");
    var box=$("#jnBrandList");
    var currentLeft=0;
    var autoLeft;//�ֶ��ֲ�һ��
    $("#jnBrandTab li:eq(0)").addClass("chos").siblings().removeClass("chos");
//�ֶ����ֲ�
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
//�ֶ����ֲ�
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
//���ֶ��ֲ��¼�
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
//�Զ����ֲ���һ�Σ�
    function autoChange(){
        var newLeft=index*780;
        $("#jnBrandTab li:eq("+index+")").addClass("chos").siblings().removeClass("chos");
        if(newLeft>currentLeft){
            imgLeft(newLeft)
        }else {
            imgRight(newLeft)
        }
    }
//��ʱ�Զ����ֲ�
    var autoTime=setInterval(function(){
        autoChange();
        index=(len+index+1)%len;
    },3000)
})

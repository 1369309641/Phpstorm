/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    $("#skin li").click(function(){
        $(this).addClass("selected").siblings().removeClass("selected")
        $("#cssfile").attr("href","styles/skin/"+this.id+".css")
    })
})

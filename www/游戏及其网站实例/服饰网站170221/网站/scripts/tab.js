/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    $(".tab_menu li").click(function(){
        var current=$(this).index();
        $(this).addClass("selected").siblings().removeClass("selected");
        $(".tab_box div:eq("+current+")").show().siblings().hide();
    })
})
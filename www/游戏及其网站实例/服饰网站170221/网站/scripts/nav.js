/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    $("#nav li:gt(0):lt(4)").hover(function(){
        var index=$(this).index()-1;
        $(".jnNav:eq("+index+")").show()
    },function(){
        $(".jnNav").hide()
    })
})

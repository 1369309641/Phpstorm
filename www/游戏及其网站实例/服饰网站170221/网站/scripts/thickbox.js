/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    $("#thickImg").click(function(){
        $("#TB_overlay").show();
        $("#TB_window").show();
    })
    $("#TB_window").click(function(){
        $("#TB_overlay").hide();
        $("#TB_window").hide();
    })
})
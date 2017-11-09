/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    $(".pro_size li").click(function(){
        var str=$(this).text();
        $(".pro_size strong").text(str);
    })
    $("#num_sort").change(function(){
        var num=$(this).val();
        var price=num*200;
        $(".pro_price strong").text(price);
    })
})
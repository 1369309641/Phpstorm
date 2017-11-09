/**
 * Created by Home on 2016/12/22.
 */
    $(function(){
        $("#inputSearch").focus(function(){
            var str=$(this).val();
            if (str=="请输入商品名称"){
                $(this).val("")
            }
        })
        $("#inputSearch").blur(function(){
            var str=$(this).val();
            if (str==""){
                $(this).val("请输入商品名称")
            }
        })
    })
/**
 * Created by Home on 2016/12/23.
 */
$(function(){
    $(".imgList li").click(function(){
        //var srcstr=$(this).find($("a")).attr("rel");
        ////���ַ���ת��Ϊjson����
        //var srcobj=eval('(' + srcstr + ')');
        //var srcsmall=srcobj.smallimage;
        //var srclarge=srcobj.largeimage;
        ////�����ʾ��ͼƬsrc
        //$("#bigImg").attr("src",srcsmall);
        ////����Ŵ�href
        //$(".jqzoom").attr("href",srclarge);
        ////������ֲ�ͼƬsrc
        //$("#TB_Image").attr("src",srclarge);
        var index=$(this).index();
        dochangeimg(index);
    })
})
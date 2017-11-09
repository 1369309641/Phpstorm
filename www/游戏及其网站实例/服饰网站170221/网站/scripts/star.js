/**
 * Created by Home on 2016/12/23.
 */
$(function() {
    $(".rating li").click(function () {
        var index = $(this).index();
        $(".rating").removeClass("nostar onestar twostar threestar fourstar fivestar");
        switch (index) {
            case 0:
                $(".rating").addClass("onestar");
                break;
            case 1:
                $(".rating").addClass("twostar");
                break;
            case 2:
                $(".rating").addClass("threestar");
                break;
            case 3:
                $(".rating").addClass("fourstar");
                break;
            case 4:
                $(".rating").addClass("fivestar");
                break;
        }
    })
})
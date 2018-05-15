$(function () {
    initEvent();
})
function initEvent() {
    $(".buy").on("click",function () {
        var mid = $(this).attr("movieid");
        $(".theater",parent.document).addClass("active").siblings().removeClass("active");
        $("#mainIframe",parent.document).attr("src","http://www.hgp.com/huigoupiao/Theater/Index/index.html?mid="+mid);
    })
    $(".look").on("click",function () {
        var mid = $(this).attr("movieid");
        $("#mainIframe",parent.document).attr("src","http://www.hgp.com/huigoupiao/Admin/Movie/movieDetail.html?movieid="+mid);
    })
    $(".title-more").on("click",function () {
        $(".movie",parent.document).addClass("active").siblings().removeClass("active");
        if($(this).hasClass("isnthas")){
            $("#mainIframe",parent.document).attr("src","/huigoupiao/Admin/Movie/allMovie.html?type=0");
        }else{
            $("#mainIframe",parent.document).attr("src","/huigoupiao/Admin/Movie/allMovie.html?type=1");
        }
    })
    $(".slider").on("click",function () {
        var mid = $(this).attr("movieid");
        $("#mainIframe",parent.document).attr("src","http://www.hgp.com/huigoupiao/Theater/Index/index.html?mid="+mid);
    })
}
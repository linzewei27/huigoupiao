$(function () {
    initPage();
    initEvent();
})
function initEvent() {
    //导航栏
    $(".nav li").on("click",function () {
        if($(this).attr("id")!="person"){
            $(this).addClass("active").siblings().removeClass("active");
            var target = $(this).attr("target");
            $(".main-container."+target).addClass("active").siblings().removeClass("active");
        }

    })
    $("#person").on("click",function () {
        var uid = $(this).attr("uid");
        if(uid){
            $("#mainIframe").attr("src","/huigoupiao/Admin/Public/personCenter.html?uid="+uid);
        }
    })
    $(".movie").on("click",function () {
        $("#mainIframe").attr("src","/huigoupiao/Admin/Movie/allMovie.html");
    })
    $(".home").on("click",function () {
        $("#mainIframe").attr("src","/huigoupiao/Home/Index/home.html");
    })
   $(".theater").on("click",function () {
        $("#mainIframe").attr("src","/huigoupiao/Theater/Index/theater.html");
    })
    /* $(".home").on("click",function () {
        $("#mainIframe").attr("src","/huigoupiao/Admin/Movie/allMovie.html");
    })*/
    //搜索
    $("#searchBtn").on("click",function () {
        var keyword = $("#searchInput").val();
        $("#searchInput").val("");
        $(".movie").addClass("active").siblings().removeClass("active");
        $("#mainIframe").attr("src","/huigoupiao/Admin/Movie/allMovie.html?keyword="+keyword);
    })
}
function initPage() {
    initIframe();
    var uid = getRequestParams("uid");
    if(uid){
        $.ajax({
            url:"/huigoupiao/Admin/Index/userInfo",
            data:{uid:uid},
            type:"post",
            success:function (rep) {
                if(!rep){
                    return;
                }
                rep = JSON.parse(rep);
                $(".loginInfo").html("").attr("uid",uid);
                $("#person").html('<a >  欢迎：'+rep["username"]+'</a>');
            },
            error:function (rep) {
            }
        });
    }



}
function initIframe() {

    $("#mainIframe").on("load",function(){
        var container = $("#mainIframe").contents().find("html");
        $("#mainIframe").height(container.height());
    });

}
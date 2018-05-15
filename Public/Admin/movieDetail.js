var mid = getRequestParams("movieid");
var uid = $("#person",parent.document).attr("uid");
$(function () {
    initEvent();
    initPage();
})
function initEvent() {
    $(".look").on("click",function () {

        if(!uid){
            alert("请先登录！");
        }
        $.ajax({
            url:"/huigoupiao/Admin/Movie/getOldLook",
            data:{uid:uid},
            type:"post",
            success:function (rep) {
                rep = JSON.parse(rep);
                setWentLook(rep);
            },
            error:function (rep) {
                alert("页面出错！");
            }
        });
    })
}
function initPage() {
    $.ajax({
        url:"/huigoupiao/Admin/Movie/setMovieDetail",
        data:{mid:mid},
        type:"post",
        success:function (rep) {
            rep = JSON.parse(rep);
            setContent(rep);
        },
        error:function (rep) {
            alert("页面出错！");
        }
    });
}
function setContent(data) {
    $(".chinaese-title").html(data.mcname);
    $(".english-title").html(data.mname);
    $(".type").html(data.type);
    $(".all-time").html("中国大陆/"+data.mtime);
    $(".begin-time").html(data.mbegintime);
    $(".edit button").attr("movieid",data.mid);
    $(".dra").html(data.mstory);
    $(".director").html(data.mdirector);
    $(".actior").html(data.maction);
    $(".haibao img").attr("src",data.mpic);
    var imgArr = data.mallpic.split(";");
    var imgStr = "";
    for(var i = 0;i<imgArr.length;i++){
        imgStr += '<div class="img4"><img class="default-img" alt="" src="'+imgArr[i]+'"></div>';
    }
    $(".album ").html(imgStr);
    initParaentIframe();
}
function setWentLook(data) {
    if(data.collectmovie){
       if(data.collectmovie.indexOf(mid )!="-1"){
           alert("该电影已经收藏过了！");
           return;
       }
    }
        var collectMid = data.collectmovie+mid+";";
        $.ajax({
            url:"/huigoupiao/Admin/Movie/setWentLook",
            data:{collectMid:collectMid,uid:uid},
            type:"post",
            success:function (rep) {
               /* rep = JSON.parse(rep);
                setContent(rep);*/
            },
            error:function (rep) {
                alert("页面出错！");
            }
        });

}
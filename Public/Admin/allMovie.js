var type = getRequestParams("type");
var keyword = getRequestParams("keyword");
$(function () {
    initPage();
    initEvent();
})
function initEvent() {
    $("body").on("click",".order-detail",function () {
        var movieid = $(this).attr("movieid");
        $("#mainIframe",parent.document).attr("src","http://www.hgp.com/huigoupiao/Admin/Movie/movieDetail.html?movieid="+movieid);
    })
    $(".slelect").on("click","li",function () {
        $(this).addClass("active").siblings().removeClass("active");
        initPage();
    })
    $(".type").on("click",function () {
        $(".type").removeClass("active");
        $(this).addClass("active");
        initPage();
    })
    $("body").on("click",".look",function () {
        var mid = $(this).attr("mid");
        $("#mainIframe",parent.document).attr("src","http://www.hgp.com/huigoupiao/Admin/Movie/movieDetail.html?movieid="+mid);
    })
    $("body").on("click",".buy",function () {
        var mid = $(this).attr("mid");
        $("#mainIframe",parent.document).attr("src","http://www.hgp.com/huigoupiao/Theater/Index/index.html?mid="+mid);
    })
}
function initPage() {
    var typeSelect = $(".typeSelect li.active a").html();
    var placeSelect = $(".placeSelect li.active a").html();
    var yearSelect = $(".yearSelect li.active a").html();
    if(!type){
        type =  $(".type.active").attr("value");

    }else if(type=="0"){
        $(".type").removeClass("active");
        $(".hasnt").addClass("active");
    }


    $.ajax({
        url:"/huigoupiao/Admin/Movie/getMovieInfo",
        data:{typeSelect:typeSelect,placeSelect:placeSelect,yearSelect:yearSelect,type:type,keyword:keyword},
        type:"post",
        success:function (rep) {
            rep = JSON.parse(rep);
            setDetailPage(rep,type);
            type = "";
            keyword = "";
        },
        error:function (rep) {
            alert("页面出错！");
        }
    });
}
function setDetailPage(data,type) {
    var html = "";

    if(type==1){
        for(var i=0 ;i<data.length;i++){
            html += '  <dd>\n' +
                '                        <div class="movie-item buy" mid="'+ data[i].mid+'">\n' +
                '                            <a >\n' +
                '                                <div class="movie-poster">\n' +
                '                                    <img class="poster-default"\n' +
                '                                         src="">\n' +
                '                                    <img src="'+ data[i].mpic+'">\n' +
                '                                </div>\n' +
                '                            </a>\n' +
                '\n' +
                '                            <div class="movie-ver"></div>\n' +
                '                        </div>\n' +
                '                        <div class="channel-detail movie-item-title" title="'+data[i].mcname +'">\n' +
                '                            <a href="/films/248170" target="_blank" data-act="movies-click" data-val="{movieId:248170}">'+data[i].mcname +'</a>\n' +
                '                        </div>\n' +
                '                        <div class="channel-detail channel-detail-orange">'+data[i].mgrade+  '</div>\n' +
                '\n' +
                '                    </dd>';
        }
    }else{
        for(var i=0 ;i<data.length;i++){
            html += '  <dd>\n' +
                '                        <div class="movie-item look" mid="'+ data[i].mid+'">\n' +
                '                            <a >\n' +
                '                                <div class="movie-poster">\n' +
                '                                    <img class="poster-default"\n' +
                '                                         src="">\n' +
                '                                    <img src="'+ data[i].mpic+'">\n' +
                '                                </div>\n' +
                '                            </a>\n' +
                '\n' +
                '                            <div class="movie-ver"></div>\n' +
                '                        </div>\n' +
                '                        <div class="channel-detail movie-item-title" title="'+data[i].mcname +'">\n' +
                '                            <a href="/films/248170" target="_blank" data-act="movies-click" data-val="{movieId:248170}">'+data[i].mcname +'</a>\n' +
                '                        </div>\n' +
                '\n' +
                '                    </dd>';
        }
    }

    $(".movie-list").html(html);
    initParaentIframe();
}
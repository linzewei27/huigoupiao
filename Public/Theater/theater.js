
$(function () {
    initEvent();
    initPage();
})
function initEvent() {
    $("body").on("click",".buy-btn",function () {
        var theaterid = $(this).attr("theaterid");
        $("#mainIframe",parent.document).attr("src","http://www.hgp.com/huigoupiao/Theater/Index/details.html?movieid=-1&theaterid="+theaterid);
    });
    $("body").on("click",".selecttime li,.place li",function () {
        $(this).addClass("active").siblings().removeClass("active");
        var time = $(".selecttime li.active").attr("value");
        var place = $(".place li.active").attr("value");
        console.log($(this).attr("value"));
        $.ajax({
            url:"/huigoupiao/Theater/Index/indexContainer",
            data:{mid:-1,time:time,place:place},
            type:"post",
            success:function (rep) {
                rep = JSON.parse(rep);
                setTheaterInfo(rep.theaterinfo,rep.bookinfo,false);
            },
            error:function (rep) {
                alert("页面出错！")
            }
        });
    })
    $("body").on("click",".btn-primary ",function () {
        var movieid = $(this).attr("movieid");
        $("#mainIframe",parent.document).attr("src","http://www.hgp.com/huigoupiao/Admin/Movie/movieDetail.html?movieid="+movieid);
    })
}
function initPage() {
    /*console.log(mid)*/
    $.ajax({
        url:"/huigoupiao/Theater/Index/indexContainer",
        data:{mid:-1,time:-1,place:-1},
        type:"post",
        success:function (rep) {
            rep = JSON.parse(rep);
           /* setMovieInfo(rep.movieinfo[0]);*/
            rep.bookinfo = getTheaterLowPrice(rep.bookinfo);
            rep.theaterinfo = getTheaterInfo(rep.theaterinfo,rep.bookinfo);
            setTheaterInfo(rep.theaterinfo,rep.bookinfo,true);
        },
        error:function (rep) {
            alert("页面出错！")
        }
    });
}

/*function setMovieInfo(data) {
    $(".haibao img").attr("src",data.mpic);
    $(".chinaese-title").html(data.mcname);
    $(".english-title").html(data.mname);
    $(".type").html(data.mtype);
    $(".all-time").html("中国大陆/"+data.mtime);
    $(".begin-time").html(data.mbegintime);
    $(".edit button").each(function () {
        $(this).attr("movieid",data.mid);
    })
}*/
function setTheaterInfo(theaterinfo,bookInfo,isFirst) {
    var timeList = {};
    var placeList = {};
    var movieList = {};
    var time = '<li class="active" value = "-1">\n' +
        '                            <a>全部</a>\n' +
        '                        </li>';
    var place = '<li class="active" value = "-1">\n' +
        '                            <a>全部</a>\n' +
        '                        </li>';
    var cinemasList = '<h2 class="cinemas-list-header">影院列表</h2>';
    for(var i=0;i<bookInfo.length;i++){
        var timeString = bookInfo[i].playdate.split("/")[1]+"月"+bookInfo[i].playdate.split("/")[2]+"日";
        if(!timeList[timeString]){
            time += '<li class="" value="'+bookInfo[i].playdate +'">\n' +
                '                            <a >\n' +
                bookInfo[i].playdate.split("/")[1]+"月"+bookInfo[i].playdate.split("/")[2]+"日"+
                '                            </a>\n' +
                '                        </li>';
            timeList[timeString] = 1;
        }
        if(!placeList[bookInfo[i].bigplace]){

            place+= '<li class="" value="'+bookInfo[i].bigplace+'">\n' +
                '                            <a>'+bookInfo[i].bigplace+'</a>\n' +
                '                        </li>'
            placeList[bookInfo[i].bigplace] = 1;

        }
            cinemasList+= '<div class="cinema-cell">\n' +
                '                <div class="cinema-info">\n' +
                '                    <a class="cinema-name" data-act="cinema-name-click" data-bid="b_wek7vrx9" data-val="{city_id: 20, cinema_id: 23610}">'+theaterinfo[i].name+'</a>\n' +
                '                    <p class="cinema-address">地址：'+ bookInfo[i].place+'</p>\n' +
                '                </div>\n' +
                '\n' +
                '                <div class="buy-btn" theaterid="'+bookInfo[i].theaterid +'">\n' +
                '                    <a >选座购票</a>\n' +
                '                </div>\n' +
                '\n' +
                '                <div class="price">\n' +
                '                    <span class="rmb red">￥</span>\n' +
                '                    <span class="price-num red">'+bookInfo[i].price+'</span>\n' +
                '                    <span>起</span>\n' +
                '                </div>\n' +
                '            </div>';
        }

    if(isFirst){
        $(".selecttime").html(time);
        $(".place").html(place);
    }
    $(".cinemas-list").html(cinemasList);
    initParaentIframe();
}

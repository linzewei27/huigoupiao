var uid = getRequestParams("uid");
$(function () {
    initPage();
    initEvent();
})
function initEvent() {
    $("body").on("click",".order-detail",function () {
        var movieid = $(this).attr("movieid");
        $("#mainIframe",parent.document).attr("src","http://www.hgp.com/huigoupiao/Admin/Movie/movieDetail.html?movieid="+movieid);
    })
    $(".user-profile-nav").on("click","a",function () {
        $(this).addClass("active").siblings().removeClass("active");
        var target = $(this).attr("target");
        $("."+target).removeClass("hidden").siblings(".orders-container").addClass("hidden");
    })
}
function initPage() {
    $.ajax({
        url:"/huigoupiao/Admin/Public/personCenterInfo",
        data:{uid:uid},
        type:"post",
        success:function (rep) {
            rep = JSON.parse(rep);
            setDetailPage(rep.bookinfo,rep.bookArrInfo,rep.collectInfo,rep.movieinfo,rep.theaterinfo);
        },
        error:function (rep) {
            alert("页面出错！");
        }
    });
}
function setDetailPage(bookinfo,bookArrInfo,collectInfo,movieinfo,theaterinfo) {
    var orderHtml = '';
    var collectHtml = '';
    var i = 0;
    for (var k in bookinfo){

        var siteHtml = '';
            var siteArr = bookinfo[k].split(",");
            for(var l = 0;l<siteArr.length;l++){
                siteHtml+=siteArr[l].split("-")[0]+"排"+siteArr[l].split("-")[1]+"座/";
            }
            var money = l*bookArrInfo[i].price;

        orderHtml += '<div class="order-box">\n' +
            '                        <div class="order-header">\n' +
            '                            <span class="order-date">'+bookArrInfo[i].playdate+'</span>\n' +
            '                           <!-- <span class="del-order" data-orderid="3092280159"></span>\n-->' +
            '                        </div>\n' +
            '\n' +
            '                        <div class="order-body">\n' +
            '                            <div class="poster">\n' +
            '                                <img src="'+movieinfo[i].mpic+'">\n' +
            '                            </div>\n' +
            '\n' +
            '                            <div class="order-content">\n' +
            '                                <div class="movie-name">《'+movieinfo[i].mcname +'》</div>\n' +
            '                                <div class="cinema-name">'+ theaterinfo[i].name+'</div>\n' +
            '                                <div class="hall-ticket">\n' +
            '                                    <span>'+ bookArrInfo[i].house+'号厅</span>\n' +
            '                                    <span class="site" title="'+siteHtml+'">'+siteHtml+'</span>\n' +
            '                                </div>\n' +
            '                                <div class="show-time">'+ bookArrInfo[i].playdate+'  '+ bookArrInfo[i].playtime+'</div>\n' +
            '                            </div>\n' +
            '\n' +
            '                            <div class="order-price">￥'+money+'</div>\n' +
            '\n' +
            '                            <div class="order-status">\n' +
            '                                已预定\n' +
            '                            </div>\n' +
            '\n' +
            '                            <div class="actions">\n' +
            '                                <div>\n' +
            '                                    <a class="order-detail" movieid="'+movieinfo[i].mid +'">查看详情</a>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                    </div>';
        i++;
    }
    for (var  i=0;i<collectInfo.length;i++){
        if(collectInfo[i]){


        collectHtml += '<div class="order-box">\n' +
            '                        <div class="order-header">\n' +
            '                        </div>\n' +
            '\n' +
            '                        <div class="order-body">\n' +
            '                            <div class="poster">\n' +
            '                                <img src="'+collectInfo[i].mpic+'">\n' +
            '                            </div>\n' +
            '\n' +
            '                            <div class="order-content">\n' +
            '                                <div class="movie-name">《'+collectInfo[i].mcname +'》</div>\n' +
            '<div class="cinema-name">导演：'+collectInfo[i].mdirector +'</div>'+
            '<div class="hall-ticket">\n' +
            '                                    <span class="site" title="'+ collectInfo[i].maction+'">'+collectInfo[i].maction +'</span>\n' +
            '                                </div>'+
            '                                <div class="show-time">上映时间：'+ collectInfo[i].mbegintime+'</div>\n' +
            '                            </div>\n' +
            '\n' +
            '                            <div class="actions">\n' +
            '                                <div>\n' +
            '                                    <a class="order-detail" movieid="'+collectInfo[i].mid +'">查看详情</a>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                    </div>';
    }
    }
    $(".hasBook .profile-title").after(orderHtml);
    $(".collection .profile-title").after(collectHtml);
    initParaentIframe();
}
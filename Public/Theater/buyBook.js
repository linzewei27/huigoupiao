var theaterid = getRequestParams("theaterid");
var movieid = getRequestParams("movieid");
var boookInfoid = getRequestParams("boookInfoid");
var price = 0;
var selectedSeat ="";
var bookedmovie = {};
$(function () {
    initPage();
    initEvent();
})
function initEvent() {
    $("body").on("click",".seat.selectable",function () {
        if($(".seat.selected").length>6){
            alert("最多一次选6个座位！");
            return;
        }
        $(this).removeClass("selectable").addClass("selected");
    })
    $("body").on("click",".seat.selected",function () {
        $(this).addClass("selectable").removeClass("selected");
    })
    $(".confirm-btn ").on("click",function () {
        var totleBook = $(".seat.selected").length;
        if(totleBook<=0){
            alert("您还未选择座位！");
            return;
        }
        if(totleBook<6){
            var newSite = "";
            $(".seat.selected").each(function () {
                if(newSite==""){
                    newSite += $(this).attr("data");
                }else{
                    newSite += ","+$(this).attr("data");
                }

            })
            if(bookedmovie==null||!bookedmovie[boookInfoid]){
                bookedmovie[boookInfoid] = newSite;

            }else{
                bookedmovie[boookInfoid] +=","+newSite;
            }
            if(selectedSeat.length!=0){
                selectedSeat += ","+newSite;
            }else{
                selectedSeat += newSite;
            }

            var uid = $("#person",parent.document).attr("uid");
            if(!uid){
                alert("请先登录！");
                return;
            }
            $.ajax({
                url:"/huigoupiao/Theater/Index/booked",
                data:{boookInfoid:boookInfoid,selectedSeat:selectedSeat,uid:uid,newSite:bookedmovie},
                type:"post",
                success:function (rep) {
                    alert(rep);
                    alert("您共成功预定了"+totleBook+"张票！");
                    initPage();
                },
                error:function (rep) {
                    alert("页面出错！");
                    initPage();
                }
            });


        }
    })
}
function initPage() {
    var uid = $("#person",parent.document).attr("uid");
    if(!uid){
        alert("请先登录！");
        return;
    }

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
                if(rep.bookedmovie!=null){
                    bookedmovie = JSON.parse(rep.bookedmovie);
                }

            },
            error:function (rep) {
            }
        });
    }

    $.ajax({
        url:"/huigoupiao/Theater/Index/selectSeat",
        data:{movieid:movieid,theaterid:theaterid,boookInfoid:boookInfoid},
        type:"post",
        success:function (rep) {
            rep = JSON.parse(rep);
            setTheaterInfo(rep.theaterinfo);
            setBookInfo(rep.bookInfo);
            setMovieInfo(rep.movieInfo);
        },
        error:function (rep) {
            alert("页面出错！");
        }
    });
}

function setTheaterInfo(theaterinfo) {
    $(".theater").html(theaterinfo.name);
}

function setBookInfo(bookInfo) {
    var siteRowArr  = bookInfo.allsite.split(";");
    var siteRowStr = "";
    var allSiteStr = "";
    selectedSeat =  bookInfo.site;
    price = bookInfo.price;
    for(var i = 0;i<siteRowArr.length;i++){
        siteRowStr += '<span class="row-id">'+(i+1)+'</span>';
        var siteArr = siteRowArr[i].split(",");
        var siteStr = "";
        for(var j =0;j<siteArr.length;j++){
            siteStr += '<span class="seat selectable" data="'+siteArr[j]+'"></span>';
        }
        var siteDivStr = '<div class="row">'+siteStr+'</div>';
        allSiteStr += siteDivStr;
    }
    $(".seats-wrapper").html(allSiteStr);
    $(".row-id-container").html(siteRowStr);
    var selected = bookInfo.site.split(",");
    for(var k=0;k<selected.length;k++){
        $(".seat.selectable[data="+selected[k]+"]").addClass("sold").removeClass("selectable");
    }
    $(".house").html(bookInfo.house+"号厅");
    $(".language").html(bookInfo.language);
    $(".date").html(bookInfo.playdate+" "+bookInfo.playtime);
    $(".price").html("￥"+ bookInfo.price+"/张");
}

function setMovieInfo(movieInfo) {

    $(".poster img").attr("src",movieInfo.mpic);
    $(".type").html(movieInfo.mtype);
    $(".time").html(movieInfo.mtime);
    $(".name").html(movieInfo.mcname);
    initParaentIframe();
}



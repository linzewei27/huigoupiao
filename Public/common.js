function getRequestParams(key) {
    if(!key){
        return;
    }
    var url = location.search; //获取url中"?"符后的字串
    var theRequest = new Object();
    if (url.indexOf("?") != -1) {
        var str = url.substr(1);
        strs = str.split("&");
        for(var i = 0; i < strs.length; i ++) {
            theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);
        }
    }
    return theRequest[key];
}
//重新设置iframe的高
function initParaentIframe() {


        var container =  $("#mainIframe",parent.document).contents().find("html");
        $("#mainIframe",parent.document).height(container.height());


}
//根据价格排序
function getTheaterLowPrice(bookInfo) {
    var reslut = [];
    var lowPrice = {};
    var price;
    for(var i =0;i<bookInfo.length;i++){
        if(!lowPrice[bookInfo[i]["theaterid"]]||lowPrice[bookInfo[i]["theaterid"]]["price"]>bookInfo[i]["price"]){
            lowPrice[bookInfo[i]["theaterid"]] = bookInfo[i];
        }
    }
    for(var k in lowPrice){
        reslut.push(lowPrice[k]);
    }
    for(var i=0;i<reslut.length;i++){
        for(var j = i+1;j<reslut.length;j++){
            if(reslut[i].price>reslut[j].price){
                price = reslut[i];
                reslut[i] = reslut[j];
                reslut[j] = price;
            }
        }
    }
    return reslut;
}
function getTheaterInfo(theaterInfo,bookinfo) {
    var resultArr = [];
    for(var i=0;i<bookinfo.length;i++){
        for(var j=0;i<theaterInfo.length;j++){
            if(theaterInfo[j].id==bookinfo[i].theaterid){
                resultArr.push(theaterInfo[j]);
                break;
            }
        }
    }
    return resultArr;
}
/*
var rmark = 2;
$data = {};
function getMovieData(movieName) {
    $data["mcname"]=$(".name").html();
    $data["mname"]=$(".ename").html();
    $data["mgrade"]=8.5;
    $data["mpic"]="/huigoupiao/Public/AllPic/haibao/"+movieName+".jpg";
    $data["mtype"]=$(".movie-brief-container .ellipsis").eq(1).html();
    $data["mcountry"]=$(".movie-brief-container .ellipsis").eq(2).html().split("/")[0].replace(/(^\s*)|(\s*$)/g, "");
    $data["mtime"]=$(".movie-brief-container .ellipsis").eq(2).html().split("/")[1].replace(/(^\s*)|(\s*$)/g, "");
    $data["mbegintime"]=$(".movie-brief-container .ellipsis").eq(3).html();
    $data["mmoney"]="10."+rmark+"亿";
    $data["mstory"]=$(".dra").html();
    for(var i =0;i<$(".celebrity-type").length;i++){

        if($($(".celebrity-type")[i]).html().replace(/(^\s*)|(\s*$)/g, "")=="导演"){

           var li =  $($(".celebrity-type")[i]).siblings(".celebrity-list").find("li");

           for(var j =0;j<li.length;j++){
               if(j==0){
                   $data["mdirector"] = $(li[j]).find(".info a").html().replace(/(^\s*)|(\s*$)/g, "");

               }else{
                   $data["mdirector"] += "/"+$(li[j]).find(".info a").html().replace(/(^\s*)|(\s*$)/g, "");

               }

           }

        }
        if($($(".celebrity-type")[i]).html().replace(/(^\s*)|(\s*$)/g, "")=="演员"){
            var li =  $($(".celebrity-type")[i]).siblings(".celebrity-list").find("li");
            for(var j =0;j<li.length;j++){
                if(j==0){
                    $data["maction"] = $(li[j]).find(".info a").html().replace(/(^\s*)|(\s*$)/g, "");
                }else{
                    $data["maction"] += "/"+$(li[j]).find(".info a").html().replace(/(^\s*)|(\s*$)/g, "");
                }

            }

        }
    }
 /!*   $data["maction"]=$(".name").html();
    $data["mdirector"]=$(".name").html();*!/
    $data["mallpic"]="/huigoupiao/Public/AllPic/tuji/thwj/01.jpg;/huigoupiao/Public/AllPic/tuji/thwj/02.jpg;/huigoupiao/Public/AllPic/tuji/thwj/03.jpg;/huigoupiao/Public/AllPic/tuji/thwj/04.jpg;/huigoupiao/Public/AllPic/tuji/thwj/05.jpg;/huigoupiao/Public/AllPic/tuji/thwj/06.jpg;/huigoupiao/Public/AllPic/tuji/thwj/07.jpg;/huigoupiao/Public/AllPic/tuji/thwj/08.jpg;/huigoupiao/Public/AllPic/tuji/thwj/09.jpg;/huigoupiao/Public/AllPic/tuji/thwj/10.jpg;/huigoupiao/Public/AllPic/tuji/thwj/11.jpg;/huigoupiao/Public/AllPic/tuji/thwj/12.jpg;";
    $data["mallpic"] = $data["mallpic"].replace(/thwj/g,movieName);

    $data["mtalk"]={};
    $data["mis3d"]=0;
    $data["mrank"]=rmark++;
    $data["mhas"]=1;
    $data["theatresid"]="";
    $data = JSON.stringify($data);

}
getMovieData();
console.log($data);
function addMovieInfo() {
    $.ajax({
        url:"http://www.hgp.com/huigoupiao/Admin/Movie/addMovieInfo",
        data:{data:$data},
        type:"post",

        success:function (rep) {
            console.log($data);
            console.log(rep);
            alert(rep);
        },
        error:function (rep) {
            console.log(rep)
            alert("页面出错！");
        }
    });
}
addMovieInfo();

    function addTheaterInfo(){
        $.ajax({
            url:"http://www.hgp.com/huigoupiao/Admin/Movie/addTheater",
            data:{data:$data},
            type:"post",

            success:function (rep) {
               /!* console.log($data);
                console.log(rep);*!/
                alert(rep);
            },
            error:function (rep) {
                console.log(rep)
                alert("页面出错！");
            }
        });
    }
*/

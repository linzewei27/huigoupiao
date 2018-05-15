$(function () {
    initEvent();
})
function initEvent() {
    $("#login").on("click",function () {
        var user = $("#inputUser").val();
        var password = $("#inputPassword").val();
        if(user==""||password==""){
            $(".errInfo").html("账号或者密码不能为空！");
            return;
        }
        $.ajax({
            url:"/huigoupiao/Admin/User/login",
            data:{user:user,password:password},
            type:"post",
            success:function (rep) {
                if(!rep){
                    $(".errInfo").html("账号或者密码错误！");
                    return;
                }
                location.href = "/huigoupiao/Admin/Index/index?uid=" + rep;
            },
            error:function (rep) {
                $(".errInfo").html("暂时无法登陆！");
            }
        });
    })
}
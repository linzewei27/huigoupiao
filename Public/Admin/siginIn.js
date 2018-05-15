var allUsers = [];
var isAllHas = [false,false,true,true];
var data = {};
$(function () {
    getUsersData();
})
function initEvent() {

    $("#inputUser").on("blur",function () {
        if(!($(this).val().trim())){
            $(this).siblings(".import").html("* 用户名不能为空！");
            isAllHas[0] = false;
            return;
        }
        for (var i =0;i<allUsers.length;i++){
            if($(this).val() == allUsers[i]["username"] ){
                $(this).siblings(".import").html("* 该用户名已经存在！");
                isAllHas[0] = false;
                return ;
            }
        }
        data["username"] = $(this).val();
        data["user"] = $(this).val();
        isAllHas[0] = true;
        $(this).siblings(".import").html("*");
    })
    $("#inputPassword,#inputAgainPassword").on("blur",function () {
        if($("#inputPassword").val() != $("#inputAgainPassword").val() ){
            $("#inputPassword").siblings(".import").html("* 两次输入的密码不一致！");
            $("#inputAgainPassword").siblings(".import").html("* 两次输入的密码不一致！");
            isAllHas[1] = false;
            return ;
        }
        data["password"] = $(this).val();
        isAllHas[1] = true;
        $("#inputPassword").siblings(".import").html("*");
        $("#inputAgainPassword").siblings(".import").html("*");
    })
    $("#tel").on("blur",function () {
        for (var i =0;i<allUsers.length;i++){
            if($(this).val() == allUsers[i]["tel"] ){
                $(this).siblings(".import").html("该手机号码已经被注册！");
                isAllHas[2] = false;
                return ;
            }
        }
        if( $(this).val().trim()){
            data["tel"] = $(this).val();
        }

        isAllHas[2] = true;
        $(this).siblings(".import").html("");
    })
    $("#email").on("blur",function () {
        for (var i =0;i<allUsers.length;i++){
            if($(this).val() == allUsers[i]["email"] ){
                $(this).siblings(".import").html("该邮箱已经被注册！");
                isAllHas[3] = false;
                return ;
            }
        }
        if($(this).val().trim()){
            data["email"] = $(this).val();
        }
        isAllHas[3] = true;
        $(this).siblings(".import").html("");
    })

    //注册
    $("#siginIn").on("click",function () {
        for(var i = 0;i<isAllHas.length;i++){
            if(!isAllHas[i]){
                alert("请正确的完成所有输入框的填写！");
                return;
            }
        }
        if(!$("#remember")[0].checked){
            alert("请仔细阅读注册条例并同意！");
            return;
        }
        $.ajax({
            url:"/huigoupiao/Admin/User/signIn",
            type:"post",
            data:data,
            success:function (rep) {
                alert("注册成功");
                window.location.href = "/huigoupiao/Admin/Index/index?uid="+rep;

            },
            error:function (rep) {
                alert(rep.status+" "+rep.statusText);
            }
        });
    })
}
function getUsersData() {
    $.ajax({
        url:"/huigoupiao/Admin/User/getUserInfo",
        type:"post",
        success:function (rep) {
            allUsers =  JSON.parse(rep);
            initEvent();
            return ;
        },
        error:function (rep) {
            initEvent();
            return false;
        }
    });
}
function checkInput() {
    if(allUsers){

    }
}
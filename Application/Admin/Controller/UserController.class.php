<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/9
 * Time: 17:26
 */

namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller
{
    function login(){
        $user = $_POST['user'];
        $password = $_POST['password'];
        $login = M('User');
        $hasUser = $login->where(array('user'=>$user,'password'=>$password))->find();
        if(is_array($hasUser)){
            echo $hasUser["uid"];
            /*echo json_encode($hasUser);*/
        }else{
            echo false;
        }


    }
    function getUserInfo(){
        $login = M('User');
        $allUser = $login->select();
        if(is_array($allUser)){
            echo json_encode($allUser);
        }else{
            echo false;
        }
    }

    function signIn(){
        $login = M('user');
        $data["user"] = $_POST['user'];
        $data["userName"] = $_POST['user'];
        $data["password"] = $_POST['password'];
        $data["tel"] = $_POST['tel'];
        $data["email"] = $_POST['email'];
        $result = $login->add($data);
        echo $result;
    }
}
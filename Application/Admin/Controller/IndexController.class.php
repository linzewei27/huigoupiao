<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/9
 * Time: 19:46
 */

namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller
{
    function index(){
        $this -> display();
    }
    function userInfo(){
        $uid = $_POST["uid"];
        $uid = (int)$uid;
        if(isset($uid)&&!empty($uid)){
            $login = M('user');
            $hasUser = $login->where(array('uid'=>$uid))->find();
            if(is_array($hasUser)){
                echo json_encode($hasUser);
            }else{
                echo false;
            }
        }
    }

}
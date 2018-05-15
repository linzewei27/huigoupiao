<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/8
 * Time: 16:18
 */

namespace Admin\Controller;
use Think\Controller;

class PublicController extends Controller{
    function login(){
        $this -> display();
    }
    function siginIn(){
        $this -> display();
    }
    function personCenter(){
        $this -> display();
    }
    function personCenterInfo(){
        $uid = $_POST["uid"];
        $user = M("User");
        $movie = M("movie");
        $theater = M("theater");
        $bookinfo = M("moviebooklist");
        $userinfoArr = $user -> where(array("uid"=>$uid))->find();
        $bookinfoidJson = $userinfoArr["bookedmovie"];
        $bookinfoidArr = json_decode($bookinfoidJson);
        $resultArr = array();
        $theaterinfoArr = array();
        $movieinfoArr = array();
        $bookInfoArr = array();
        $collectInfoArr = array();
        $collectidStr = $userinfoArr["collectmovie"];
        $collectidAttr = explode(";",$collectidStr);
        foreach ($collectidAttr as $value) {
            if($value){
                $collect = $movie -> where(array("mid"=>$value))->find();
                array_push($collectInfoArr,$collect);
            }

        }
        foreach($bookinfoidArr as $key=>$value) {
            $bookArr = $bookinfo -> where(array("id"=>$key)) -> find();
            $mid = $bookArr["movieid"];
            $theaterid = $bookArr["theaterid"];
            $theaterinfo = $theater -> where(array("id"=>$theaterid))->find();
            $movieinfo = $movie -> where(array("mid"=>$mid))->find();
            array_push($theaterinfoArr,$theaterinfo);
            array_push($movieinfoArr,$movieinfo);
            array_push($bookInfoArr,$bookArr);
        }
        $resultArr["bookinfo"] = $bookinfoidArr;
        $resultArr["movieinfo"] = $movieinfoArr;
        $resultArr["theaterinfo"] = $theaterinfoArr;
        $resultArr["bookArrInfo"] = $bookInfoArr;
        $resultArr["collectInfo"] = $collectInfoArr;
        echo json_encode($resultArr);
    }
}
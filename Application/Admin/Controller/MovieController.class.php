<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 13:49
 */

namespace Admin\Controller;

use Think\Controller;

class MovieController extends Controller
{
    function movieDetail()
    {
        $this->display();
    }
    function setMovieDetail(){
        $midParam = $_POST["mid"];
        $movie = M("movie");
        $resultArr = $movie -> where(array("mid"=>$midParam)) ->find();
        echo json_encode($resultArr);
    }
    function getOldLook(){
        $uidParam = $_POST["uid"];
        $user = M("user");
        $resultArr = $user -> where(array("uid"=>$uidParam)) ->find();
        echo json_encode($resultArr);
    }
    function setWentLook(){
        $uidParam = $_POST["uid"];
        $collectMidParam = $_POST["collectMid"];
        $user = M("user");
        $result = $user -> where(array("uid"=>$uidParam)) ->setField("collectMovie",$collectMidParam);
        echo $result;
    }
    function getMovieInfo(){
        $typeSelect = $_POST["typeSelect"];
        $placeSelect = $_POST["placeSelect"];
        $yearSelect = $_POST["yearSelect"];
        $keyword= $_POST["keyword"];
        $type = $_POST["type"];
        $movieParam = array();
        if($typeSelect!="全部"){
            $movieParam['mtype'] = array('like','%'.$typeSelect.'%');
        }
        if($placeSelect!="全部"){
            $movieParam['mcountry'] = array('like','%'.$placeSelect.'%');
        }
        if($yearSelect!="全部"){
            $movieParam['mbegintime'] = array('like','%'.$yearSelect.'%');
        }
        if($keyword!=""){
            $movieParam['mcname'] = array('like','%'.$keyword.'%');
            $movieParam['mname'] = array('like','%'.$keyword.'%');
        }
        $movieParam['mhas'] = $type;
        $movie = M("movie");
        $resultArr = $movie -> where($movieParam) ->select();
        echo json_encode($resultArr);
    }
    function addMovieInfo(){
        $data = $_POST["data"];

      /* $data = json_decode($data,true);*/
       /* echo $data;*/
       $movie = M("movie");
         $result = $movie->data($data)->add();
        echo json_encode($data);
    }
    function addTheater(){
        $data = $_POST["data"];

        /* $data = json_decode($data,true);*/
        /* echo $data;*/
        $theater = M("theater");
        $result = $theater->data($data)->add();
        echo json_encode($data);
    }
}
<?php
namespace Theater\Controller;
use Think\Controller;
class IndexController extends Controller{
    function  index(){
        $this->display();
    }
    function  details(){
        $this->display();
    }
    function indexContainer(){
        $mid = $_POST["mid"];
        $time = $_POST["time"];
        $place = $_POST["place"];
        $selectInfo = array();
        if($time != "-1"){
            $selectInfo["playDate"] = $time;
        }
        if($place != "-1"){
            $selectInfo["bigplace"] = $place;
        }

        $mid = (int)$mid;
        $book = M('moviebooklist');
        if($mid!="-1"){
            $selectInfo["movieid"] = $mid;
        }
        $hasBooks = $book->where($selectInfo)->select();
        /*echo json_encode($hasBook);*/
            if(is_array($hasBooks)){
                $theaterinfo = array();
                $theater = M('theater');
                foreach ($hasBooks as $hasBook){
                    $theaterid = (int)$hasBook["theaterid"];
                    $theaterinfo = array_merge($theater->where(array('id'=>$theaterid))->select(),$theaterinfo);
                }


                $movie = M('movie');
                $movieinfo = $movie->where(array('mid'=>$mid))->select();
                /*echo json_encode($movieinfo);*/
                $result = array("movieinfo"=>$movieinfo,"theaterinfo"=>$theaterinfo,"bookinfo"=>$hasBooks);
                echo json_encode($result);
            }else{
                echo false;
            }
    }
    function selectTime(){
        $movieinfoid = $_POST["movieid"];
        $theaterid = $_POST["theaterid"];
        $time = $_POST["time"];
        $theaterParam = array('id'=>$theaterid);
        $bookinfoParam = array("theaterid"=>$theaterid);
        if($time != "-1"){
            $bookinfoParam["playDate"] = $time;
        }
        $theater = M('theater');
        $movie = M("movie");
        $allMovieInfoList = array();
        $book = M("moviebooklist");
        $theaterinfo = $theater->where($theaterParam)->select();
        $allMovieInfo = $book ->where($bookinfoParam)->select();

        foreach ($allMovieInfo as $movieInfo){
            $movieinfo = $movie -> where(array("mid"=>$movieInfo["movieid"]))->find();
            array_push($allMovieInfoList,$movieinfo);
        }
        if($movieinfoid=="-1"){
            $movieinfoid = $allMovieInfoList["0"]["mid"];
        }
        $movieInfo = $movie -> where(array("mid"=>$movieinfoid))->find();
        $bookinfoParam["movieid"] = $movieinfoid;
        $bookInfo = $book ->where($bookinfoParam)->select();
        $result =array();
        $result["theaterinfo"] = $theaterinfo;
        $result["allMovieInfo"] = $allMovieInfoList;
        $result["bookInfo"] = $bookInfo;
        $result["movieInfo"] = $movieInfo;
        echo json_encode($result);
    }
    function buyBook(){
        $this ->display();
    }
    function selectSeat(){
        $movieinfoid = $_POST["movieid"];
        $theaterid = $_POST["theaterid"];
        $boookInfoid = $_POST["boookInfoid"];
        $theaterParam = array('id'=>$theaterid);
        $bookinfoParam = array("id"=>$boookInfoid);
        $allMovieInfoList = array("mid"=>$movieinfoid);
        $theater = M('theater');
        $movie = M("movie");
        $book = M("moviebooklist");
        $movieInfo = $movie -> where($allMovieInfoList)->find();
        $theaterinfo = $theater->where($theaterParam)->find();
        $bookInfo = $book ->where($bookinfoParam)->find();
        $result =array();
        $result["theaterinfo"] = $theaterinfo;
        $result["bookInfo"] = $bookInfo;
        $result["movieInfo"] = $movieInfo;
        echo json_encode($result);
    }
    function booked(){
        $boookInfoid = $_POST["boookInfoid"];
        $selectedSeat = $_POST['selectedSeat'];
        $newSelected  = $_POST['newSite'];
        $uid = $_POST['uid'];
        $book = M("moviebooklist");
        $user = M("user");
        $book -> where(array("id"=>$boookInfoid)) ->setField("site",$selectedSeat);
        $newSelected = json_encode($newSelected);
        echo $newSelected;
        $user ->  where(array("uid"=>$uid)) ->setField("bookedMovie",$newSelected);
    }
}

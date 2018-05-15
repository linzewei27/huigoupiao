<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/8
 * Time: 14:03
 */
namespace Admin\Controller;
use Think\Controller;

class TestController extends Controller{
    function  test(){
        $time = time();
        $str = 'adEaAafeDS';
        $this -> assign('time',$time);
        $this -> assign('str',$str);
        $this -> display();
    }
    function  test1(){
        $this->success("success",'test',1);
    }
    function setBookInfo(){
/*        $bookInfo = M("moviebooklist");
        $theater = M("theater");
        $theaterInfoArr = $theater -> select();
        for ($i = 0; $i < sizeof($theaterInfoArr); $i++) {
            $data1['place'] = $theaterInfoArr[$i]['place'];
            $data1['bigplace'] = $theaterInfoArr[$i]['bigplace'];
            $bookInfo->where('theaterid='.$theaterInfoArr[$i]["id"])->save($data1);
        }
        $data3[playDate] = "2018/06/09";
        $bookInfo->where('playDate="2018/03/20"')->save($data3);
        $data2[playDate] = "2018/06/11";
        $bookInfo->where('playDate="2018/06/20"')->save($data2);
        $data4[playDate] = "2018/06/12";
        $bookInfo->where('playDate="2018/06/25"')->save($data4);
        $data5[playDate] = "2018/06/13";
        $bookInfo->where('playDate="2018/06/30"')->save($data5);*/
        $bookInfo = M("moviebooklist");
        $bookInfo->where('house>2')->delete();
      /*  $movie = M("movie");
        $theater = M("theater");
        $theaterInfoArr = $theater -> select();
        $movieInfoArr = $movie -> select();
        for ($i = 1; $i < sizeof($theaterInfoArr); $i=$i+3) {


        }*/
    }
}

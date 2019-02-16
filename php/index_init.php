<?php
/**
 * Created by PhpStorm.
 * User: qihaoyu
 * Date: 2019/2/14
 * Time: 10:48
 */
    header("Content-type: text/html; charset=utf-8");
    $conn = mysqli_connect("localhost:3306","root","root","user") or die('数据库链接失败');
    $navs = selectNav($conn);
    $middleImg = selectMiddleImg($conn);
    $safe = selectSafe($conn);
    $link = selectLink($conn);
    $columnTitle = selectColumnTitle($conn);
    $column1 = selectColumn1($conn);
    $column2 = selectColumn2($conn);
    $column3 = selectColumn3($conn);
    $column4 = selectColumn4($conn);
    $column5 = selectColumn5($conn);
    $column6 = selectColumn6($conn);
    echo json_encode([
        'code' => 0,
        'data' => [
            'navs' => $navs,
            'middleImg' => $middleImg,
            'safe' => $safe,
            'link' => $link,
            'columnTitle' => $columnTitle,
            'column1' => $column1,
            'column2' => $column2,
            'column3' => $column3,
            'column4' => $column4,
            'column5' => $column5,
            'column6' => $column6
        ]
    ]);
    function selectNav($conn){
        $sql = "SELECT description,src,layer FROM nav ORDER BY layer ";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while( $res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectMiddleImg($conn){
        $sql = "SELECT description,src FROM middle_img";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while($res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectSafe($conn){
        $sql = "SELECT id,dates FROM safe";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while($res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectLink($conn){
        $sql = "SELECT src,description FROM links";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while($res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectColumnTitle($conn){
        $sql = "SELECT description FROM column_title order by id";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while($res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectColumn1($conn){
        $sql = "SELECT title,date FROM column1 order by date desc";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while($res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectColumn2($conn){
        $sql = "SELECT title,date FROM column2 order by date desc";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while($res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectColumn3($conn){
        $sql = "SELECT title,date FROM column3 order by date desc";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while($res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectColumn4($conn){
        $sql = "SELECT title,date FROM column4 order by date desc";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while($res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectColumn5($conn){
        $sql = "SELECT title,date FROM column5 order by date desc";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while($res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
    function selectColumn6($conn){
            $sql = "SELECT img_src FROM column6";
            $res_set = mysqli_query($conn,$sql);
            $res = [];
            while($res_arr = mysqli_fetch_array($res_set)){
                array_push($res, $res_arr);
            }
            return $res;
        }




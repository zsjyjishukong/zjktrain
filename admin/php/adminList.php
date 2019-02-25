<?php
/**
 * Created by PhpStorm.
 * User: qihaoyu
 * Date: 2019/2/17
 * Time: 16:19
 */
header("Content-type: text/html; charset=utf-8");
$conn = mysqli_connect("localhost:3306","root","root","user") or die('数据库链接失败');
$admin = selectAdmin($conn);
echo json_encode([
    'code' => 0,
    'data' => [
        'adminList' => $admin
    ]
]);
function selectAdmin($conn){
    $sql = "SELECT admin_name FROM admin ";
    $res_set = mysqli_query($conn,$sql);
    $res = [];
    while( $res_arr = mysqli_fetch_array($res_set)){
        array_push($res, $res_arr);
    }
    return $res;
}

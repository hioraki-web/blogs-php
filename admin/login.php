<?php
// 设置跨域
include_once '../lib/cors.php';
include_once '../lib/fn.php';
// include_once '../lib/fn.php';
//  登录接口
// 1获取前端传递过来的数据
//    1.判断用户名是否与前端传递过来的一样是 检查密码 否则返回用户名不存在
// 2.如果存在 判断密码是否正确
//    1.正确 返回登录成功
//    2.错误 返回密码不正确
// 
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$userName =  $_POST['userName'];
$pwd =  $_POST['password'];

$sql = "select * from admin where username = '$userName'";

$data = my_query($sql);

// echo '<pre>';
// echo $data[0]['password'];
// echo '</pre>';

if (!$data) {
    $datas = [['status' => 304, 'message' => '用户名不存在']];
    echo json_encode($datas);
    die();
} else {

    // 判断密码是否正确
    if ($data[0]['password'] == $pwd) {
        // 登录成功开启 
        session_start();
        //给用户加标记
        $_SESSION['user_id'] = $data[0]['id'];
        $datas = [['status' => 200, 'message' => '登录成功', 'session' => $_SESSION['user_id']]];
        echo json_encode($datas);
        die();
    } else {
        $datas = [['status' => 304, 'message' => '密码错误']];
        echo json_encode($datas);
    }
}

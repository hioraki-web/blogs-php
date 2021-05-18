<?php
// 设置跨域
include_once '../lib/cors.php';
include_once '../lib/fn.php';

$ify = $_GET['ify'];
$page = $_GET['page'];

$page = ($page - 1) * 2;

$sql = "select * from article where class_ify = $ify limit $page,2";

$data[0] = my_query($sql);

$sql1 = "select count(*) as total from article  where class_ify = $ify";

$data1[0] = my_query($sql1);

$datas = [['msg' => '查询成功', 'status' => 200], $data[0], $data1[0]];

echo json_encode($datas);

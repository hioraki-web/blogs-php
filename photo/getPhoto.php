<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';


$page = $_GET['page'];

$sqpage = ($page - 1) * 3;

$sql = "select * from pto_path LIMIT $sqpage,3";

$data[0] = my_query($sql);

$sql1 = "select count(*) as 'total' from pto_path;";

$data1[0] =  my_query($sql1);
// echo '<pre>';
// print_r($data[0]);
// echo '<pre>';
$datas = [['status' => 200, 'message' => '获取数据成功'], $data[0], $data1[0]];

// echo '<pre>';
// print_r($datas);
// echo '<pre>';
echo json_encode($datas);

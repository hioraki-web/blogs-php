<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';

// 获取数据库信息
$sql = 'select * from admin';
// 保存查询数据
$data[0] = my_query($sql);


$datas = [['status' => 200, 'message' => '获取成功',], $data[0]];
// echo '<pre>';
// print_r($datas);
// echo '<pre>';

echo json_encode($datas);

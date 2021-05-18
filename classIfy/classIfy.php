<?php
// 设置跨域
include_once '../lib/cors.php';
include_once '../lib/fn.php';

$sql = 'select * from class_ify';

$datas = my_query($sql);

// echo '<pre>';
// print_r($datas);
// echo '<pre>';

echo json_encode($datas);

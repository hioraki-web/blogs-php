<?php
// 设置跨域
include_once '../lib/cors.php';
include_once '../lib/fn.php';

$id = $_GET['id'];
// echo $id;

$sql = "delete from admin where id = $id";
$data = my_exe($sql);
echo json_encode($data);

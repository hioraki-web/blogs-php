<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';

$page = $_GET['page'];

$page = ($page - 1) * 2;

$sql = "select article.id,article.title,article.intro,article.date,article.photo,article.contents,class_ify.name from article join class_ify on article.class_ify = class_ify.id 
order by article.id limit $page,2";
$data[0] = my_query($sql);

$sql1 = 'select count(*) as total from article';
// echo '<pre>';
// print_r($data[0]);
// echo '</pre>';
$data1[0] = my_query($sql1);

// echo '<pre>';
// print_r($data1[0]);
// echo '</pre>';

$datas = [['msg' => '查询成功', 'status' => 200], $data[0], $data1[0]];

echo json_encode($datas);

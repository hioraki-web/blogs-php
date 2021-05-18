<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';


// echo '<pre>';
// print_r($_POST);
// echo '</pre>';


$title = $_POST['title'];
$intro = $_POST['intro'];
$region = $_POST['region'];
$date = $_POST['date1'];
$content = $_POST['content'];
$path = $_POST['path'];
$content = $_POST['content'];

if ($region == '项目总结') {
    $region = 1;
}
if ($region == 'Vue') {
    $region = 2;
}
if ($region == 'js') {
    $region = 3;
}

$sql = "insert into article (title,intro,date,photo,contents,class_ify) values 
('$title','$intro','$date','$path','$content',$region)";


// echo $sql; 
$datas = my_exe($sql);

echo json_encode($datas);

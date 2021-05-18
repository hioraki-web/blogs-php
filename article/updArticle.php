<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';

$id = $_POST['id'];
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

$sql = "update article set title = '$title' ,intro = '$intro', date = '$date',photo = '$path', contents = '$content', class_ify = '$region' where id = $id";

//  update stu set name = '齐天大圣', age = 250, sex = 'm' where id = 10;
// echo $sql;

$data = my_exe($sql);

echo json_encode($data);

<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';

// echo '<pre>';
// print_r($_POST);
// echo '<pre>';

$title = $_POST['title'];
$path  = $_POST['path'];

// echo $title;
// echo $path;

$sql = "insert into pto_path (title,path) values('$title', '$path')";
$data = my_exe($sql);

echo json_encode($data);

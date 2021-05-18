<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';


// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$id = $_GET['id'];

$sql = "delete  from article where id = $id";

$data = my_exe($sql);

echo json_encode($data);

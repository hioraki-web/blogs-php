<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';


$id = $_GET['id'];

$sql = "delete from pto_path where id = $id";
$data = my_exe($sql);
echo json_encode($data);

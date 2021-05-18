<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';


// print_r($_FILES);

//
$file = $_FILES['file'];

if ($file['error'] === 0) {
    $ext = explode('.', $file['name'])[1]; //截取后缀名
    $newName = time() . rand(100, 99999) . '.' . $ext;
    move_uploaded_file($file['tmp_name'], '../upload/' . $newName);
}

// 
echo json_encode([['status' => 200, 'path' => "http://localhost:8080/blogs//upload/$newName"]]);

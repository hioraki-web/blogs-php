<?php
include_once '../lib/cors.php';
include_once '../lib/fn.php';

$id = $_GET['id'];

$sql = "select article.id,article.title,article.intro,article.date,article.photo,article.contents,class_ify.name from article join class_ify on article.class_ify = class_ify.id where article.id = $id";

$data[0] = my_query($sql);

echo json_encode($data[0]);

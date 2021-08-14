<?php
    require_once('database.php');
    header("Content-type: application/json; charset=UTF-8");

    $content = $_POST['content'];
    $list = array("content" => $content);

    $database = new Database();
    $database->store($content);

    echo json_encode($list);
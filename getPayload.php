<?php

header("Content-type: application/json; charset=utf-8");

require "class/Payload.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    http_response_code(200);
    new Payload($data['email']);
} else {
    http_response_code(400);
    echo json_encode(array("error" => "request method is not post"));
}
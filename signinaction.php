<?php

$returndata = [
    "error" => false,
    "success" => true,
];
$returndata = [
    "error" => true,
    "success" => false,
    "errorType" => 'password'
];
$returndata = [
    "error" => true,
    "success" => false,
    "errorType" => 'email',
];

echo json_encode($returndata);
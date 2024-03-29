<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
    
if (isset($_SERVER['HTTP_ORIGIN'])) {
    
    //header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Credentials: true');
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: *");
}
    
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: *");
    if (isset($_SERVER['HTTP_ACCESS_CONWTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    exit(0);
}
    
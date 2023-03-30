<?php

$controller = $_GET['controller'] ?? '';
$action = $_GET['action'] ?? '';
switch ($controller) {
    case'';
        require 'controller/root.php';
        break;
    case'lop';
        require 'controller/lop.php';
        break;
    case'hoc_sinh';
        require 'controller/hoc_sinh.php';
        break;
    default:
        echo 'Không tìm thấy';
        break;
}
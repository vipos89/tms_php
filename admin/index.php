<?php
include_once __DIR__.'/../functions.php';

if (isset($_GET['type'])) {
    $type = $_GET['type'];
} else {
    $type = 'dashboard';
}


$ololo = printHello('ssdfsdfsdfsd', 13);


include_once __DIR__ . "/../views/admin/layout.php";

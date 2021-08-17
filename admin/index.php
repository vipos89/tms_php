<?php
session_start();

include_once __DIR__.'/../core/functions.php';
include_once __DIR__.'/../core/db.php';

$isAdmin = $_SESSION['user']['isAdmin'] ?? false;

if(!$isAdmin){
    echo '<meta http-equiv="refresh" content="0;url=/login" />';
}

include_once __DIR__ . "/../views/admin/layout.php";

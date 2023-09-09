<?php
require_once ('config.php');
$requestURI = $_SERVER['REQUEST_URI'];

//router
if ($requestURI == "") {
    require_once (WEB_URL.'/home.php');
}
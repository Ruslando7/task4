<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();

$host = "localhost";
$log = "root";
$pass = "";
$dbname = "test";

$link = mysqli_connect($host, $log, $pass, $dbname) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");

<?php
include "../elems/head.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$query = "SELECT* FROM blog WHERE id = $id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$title = mysqli_fetch_assoc($result)['title'];

$query = "SELECT* FROM blog WHERE id = $id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

include_once "layout.php";

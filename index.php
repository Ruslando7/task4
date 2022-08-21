<?php
include_once "elems/head.php";
$title = "Мой блог";

if (isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = 1;
}
$_SESSION['page'] = $page;
$notesOnPage = 5;
$from = ($page - 1) * $notesOnPage;

$query = "SELECT COUNT(*) as count FROM blog";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$notes = mysqli_fetch_assoc($result)['count'];
$countPage = ceil($notes / $notesOnPage);

$query = "SELECT* FROM blog ORDER BY date DESC LIMIT $from, $notesOnPage";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);



include_once "layout.php";

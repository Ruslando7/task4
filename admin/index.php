<?php
include_once "../elems/head.php";

if (!empty($_SESSION['login'])) {
    $title = "Мой блог";

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $query = "DELETE FROM blog WHERE id = '$id'";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }

    if (!empty($_POST)) {
    $text = $_POST['text'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];

    $query = "SELECT COUNT(*) as count FROM blog WHERE title='$title'";
    $titleRes = mysqli_query($link, $query) or die(mysqli_error($link));
    $result = mysqli_fetch_assoc($titleRes)['count'];
        if ($result) {
            $info = ['text' => "Данная запись уже существует!", 'status' => 'info alert alert-danger'];
        } else {
            $query = "INSERT INTO blog SET title='$title', text='$text', subtitle='$subtitle'";
            mysqli_query($link, $query) or die(mysqli_error($link));
            $info = ['text' => "Запись успешно сохранена!", 'status' => 'info alert alert-info'];
        }
    }
    if (isset($_GET['page'])) {
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
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

    include_once "layout.php";
} else {
    header("Location: log/login.php");
}
<?php
include "../../elems/head.php";
if (!empty($_SESSION['login'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $query = "SELECT* FROM blog WHERE id = $id";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $title = mysqli_fetch_assoc($result)['title'];


    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $query = "DELETE FROM blog WHERE id = '$id'";
        mysqli_query($link, $query) or die(mysqli_error($link));
//        header("Location: ../index.php?page={$_SESSION['page']}");
    }

    if (!empty($_POST)) {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $text = $_POST['text'];
        $flag = false;

        $query = "SELECT* FROM blog WHERE id = $id";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $page = mysqli_fetch_assoc($result)['title'];

        if ($page !== $title) {
            $query = "SELECT COUNT(*) as count FROM blog WHERE title = '$title'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            $count = mysqli_fetch_assoc($result)['count'];
            if ($count) {
                $info = ['text' => "Данная запись уже существует!", 'status' => 'info alert alert-danger'];
            } else {
                $flag = true;
            }
        } else {
            $flag = true;
        }
        if ($flag) {
            $query = "UPDATE blog SET title='$title', subtitle = '$subtitle', text = '$text' WHERE id = '$id'";
            mysqli_query($link, $query) or die(mysqli_error($link));
            $info = ['text' => "Запись успешно сохранена!", 'status' => 'info alert alert-info'];
        }
    }


    $query = "SELECT* FROM blog WHERE id = $id";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

    include_once "layout.php";
} else {
    header("Location: ../log/login.php");
}

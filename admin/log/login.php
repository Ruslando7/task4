<?php
session_start();
if (isset($_POST['mypass']) && $_POST['mypass'] == '8662') {
    $_SESSION['login'] = true;
    header("Location: ../index.php");
} else {
include "layout.php";
}

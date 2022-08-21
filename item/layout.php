<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div id="wrapper">
    <div class="wor">
        <h1>Мой блог</h1>
        <a href="../admin/log/login.php">Log in</a>
    </div>
    <?php include_once "../elems/content.php"?>
    <a class="back" href="../index.php?page=<?=$_SESSION['page']?>">Назад</a>
</div>
<style>
    .wor {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .wor a {
        margin-top: 15px;
        font-size: 20px;
        text-align: right;
    }
    .note a{
        font-size: 22px;
    }
    .title {
        font-size: 20px;
    }
    .back {
        float: right;
        font-size: 18px;
        margin-bottom: 35px;
    }
</style>
</body>
</html>
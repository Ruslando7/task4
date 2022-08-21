<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
<div id="wrapper">
    <div class="wor">
        <h1>Мой блог</h1>
        <a href="../log/logout.php">Log out</a>
    </div>
    <a href="../index.php?del=<?=$id?>" class="del">Удалить статью</a>
    <?php include_once "../elems/content.php"?>
    <a class="back" href="../index.php?page=<?=$_SESSION['page']?>">Назад</a> <br> <br>
    <?php if (!empty($_POST)) {?>
    <div class="<?=$info['status']?>">
        <?=$info['text']?>
    </div>
    <?php
    }
    ?>
    <h3>Изменить запись</h3>
    <div id="form">
        <form action="#form" method="POST">
            <p><input class="form-control" placeholder="Введите название титула" name="title"></p>
            <p><textarea class="form-control form-sub" placeholder="Введите название подтитула" name="subtitle"></textarea></p>
            <p><textarea class="form-control" placeholder="Введите текст" name="text"></textarea></p>
            <p><input type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
        </form>
    </div>
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

    .del {
        float: right;
        font-size: 14px;
    }
</style>
</body>
</html>
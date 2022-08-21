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
        <?php
        if (!empty($_SESSION['login'])) {
            echo "<a href='log/logout.php'>Log out</a>";
        } else {
            echo "<a href=\"log/login.php\">Log in</a>";
        }
        ?>
    </div>
    <div>
        <nav>
            <ul class="pagination">
                <?php include_once "../elems/page.php"?>
            </ul>
        </nav>
    </div>
    <?php include_once "elems/content.php";
    if (!empty($_POST)) {
    ?>
    <div class="<?=$info['status']?>">
        <?=$info['text']?>
    </div>
    <?php } ?>
    <h3>Добавить запись</h3>
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
        font-size: 20px;
    }
    span {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    span p {
        padding-top: 5px;
    }
    span .del{
        font-size: 14px;
    }
    /*p {*/
    /*    display: inline-block;*/
    /*}*/
    /*.del {*/
    /*    font-size: 14px;*/
    /*}*/
    .note {
        margin-bottom: 20px;
    }
    /*textarea.form-sub {*/
    /*    height: 100px !important;*/
    /*}*/
</style>
<script src=""></script>
</body>
</html>
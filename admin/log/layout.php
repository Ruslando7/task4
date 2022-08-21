<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
<div id="wrapper">
    <div class="wor">
        <h1>Мой блог</h1>
    </div>
    <form action="" method="post">
        <span>Введите пароль для доступа к админке:</span> <br>
        <input type="password" name="mypass" class="form-control" placeholder="Введите пароль">
        <input type="submit" value="Отправить" class="btn btn-primary">
    </form>
    <a href="../../index.php" class="back">Вернуться назад</a>
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
    input {
        margin-top: 10px;
    }
    .back {
        float: right;
    }
</style>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div id="wrapper">
    <div class="wor">
        <h1>Мой блог</h1>
        <a href="admin/log/login.php">Log in</a>
    </div>
    <div>
        <nav>
            <ul class="pagination">
                <?php include_once "elems/page.php"?>
            </ul>
        </nav>
    </div>
    <?php include_once "elems/content.php"?>
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
    .note {
        margin-bottom: 20px;
    }
</style>
</body>
</html>
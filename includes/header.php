<?php
$hour = date('G');
if ($hour >= 8 && $hour < 24) {
    $theme = 'day.css';
} else {
    $theme = 'night.css';
}
$base = $base ?? '';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Без Экрана' ?></title>
    <link rel="stylesheet" href="<?= $base ?>assets/css/<?= $theme ?>">
</head>
<body>
<header class="header">
    <div class="container header-inner">
        <div class="logo">
            <a href="<?= $base ?>index.php">
                <img src="<?= $base ?>assets/images/логотип.png" alt="Логотип" class="logo-img">
            </a>
            <span>БЕЗ<br>ЭКРАНА</span>
        </div>
        <nav class="nav">
            <a href="<?= $base ?>index.php">главная</a>
            <a href="<?= $base ?>pages/catalog.php">каталог</a>
            <a href="<?= $base ?>pages/stock.php">акция</a>
            <a href="<?= $base ?>pages/login.php">вход</a>
            <a href="<?= $base ?>pages/registration.php">регистрация</a>
        </nav>
    </div>
</header>
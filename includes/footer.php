<?php $base = ''; ?>
<footer class="footer">
    <div class="container">
        <div class="footer-nav">
            <a href="<?= $base ?>index.php">главная</a>
            <a href="<?= $base ?>pages/catalog.php">каталог</a>
            <a href="<?= $base ?>pages/stock.php">акция</a>
            <a href="<?= $base ?>pages/login.php">вход</a>
            <a href="<?= $base ?>pages/registration.php">регистрация</a>
        </div>
        <div class="footer-info">
            <div class="footer-col">
                <div class="logo-footer">
                    <img src="<?= $base ?>assets/images/Логотип.png" alt="Логотип" class="logo-img">
                    <span>БЕЗ<br>ЭКРАНА</span>
                </div>
                <p>Квесты. Праздники. Аниматоры.</p>
                <p>2026 © Без Экрана</p>
            </div>
            <div class="footer-col">
                <div class="phone">+7 123 456-78-90</div>
                <p>Без выходных 09:00 - 21:00</p>
                <a href="#">Политика конфиденциальности</a>
            </div>
            <div class="footer-col">
                <p>Любые вопросы 24/7</p>
                <p>На <strong>«Цветочной»</strong> д. 28, корп. 2</p>
                <p>На <strong>«Лесной»</strong> д. 13</p>
                <p>На <strong>«Центральной»</strong> д.8, 2 этаж</p>
                <a href="#">Вопросы и ответы</a>
                <p style="font-size: 12px; margin-top: 10px;">На сайте используются материалы с сайта freepic.com</p>
            </div>
        </div>
    </div>
<?php
    $today = date('d.m.Y');
    $newYear = (date('L') ? 366 : 365) - date('z');
    if ($newYear % 10 >= 2 && $newYear % 10 <= 4 && ($newYear % 100 < 10 || $newYear % 100 >= 20)) {
        $day_word = 'дня';
    } else {
        $day_word = 'дней';
    }
    ?>
    <div class="new-year">
        <p>Сегодня: <b><?php echo $today; ?></b></p>
        <p>До Нового Года: <b><?php echo $newYear; ?><?php echo $day_word; ?></b></p>
    </div>
</footer>
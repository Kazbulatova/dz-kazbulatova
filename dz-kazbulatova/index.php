<?php
$hour = date('G');
if ($hour >= 8 && $hour < 20) {
     $theme = 'day.css';
} else {
    $theme = 'night.css';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин анти-гаджетов</title>
   <link rel="stylesheet" href="css/<?php echo $theme; ?>">
</head>
<body>

<header class="header">
    <div class="container header-inner">
        <div class="logo">
            <img src="images/логотип.png" alt="Логотип" class="logo-img">
            <span>БЕЗ<br>ЭКРАНА</span>
        </div>
        <nav class="nav">
            <a href="index.ph">главная</a>
    <a href="pages/catalog.php">каталог</a>
    <a href="pages/stock.php">акция</a>
    <a href="pages/login.php">вход</a>
    <a href="pages/registration.php">регистрация</a>
</nav>
<div></div>
</div>
</header>

<section class="hero">
    <div class="container hero-content">
        <h1>НАСТОЛЬНЫЕ ИГРЫ И<br>КВЕСТЫ</h1>
        <div class="search-bar">
            <select>
                <option>УРОВЕНЬ СЛОЖНОСТИ</option>
                <option>Легкий</option>
                <option>Средний</option>
                <option>Сложный</option>
            </select>
            <div class="people-counter">
                <span>Количество людей:</span>
                <input type="number" min="1" max="20" value="1" class="people-input">
            </div>
            <button class="btn-search">🔍</button>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title">КВЕСТЫ</h2>
        <div class="cards-grid">
            <div class="card">
                <img src="images/ограбление в темноте.jpg" alt="Ограбление в темноте" class="card-img">
                <div class="card-body">
                    <h3>СКОРО! ЭКШН-ИГРА<br>«ОГРАБЛЕНИЕ В ТЕМНОТЕ»!</h3>
                    <a href="#" class="btn">СМОТРЕТЬ</a>
                </div>
            </div>
            <div class="card">
                <img src="images/секретная комната.jpg" alt="Секретная комната" class="card-img">
                <div class="card-body">
                    <h3>«СЕКРЕТНАЯ КОМНАТА»<br>С ВЕДУЩИМИ</h3>
                    <a href="#" class="btn">СМОТРЕТЬ</a>
                </div>
            </div>
            <div class="card">
                <img src="images/мафия.jpg" alt="Мафия с ведущими" class="card-img">
                <div class="card-body">
                    <h3>«МАФИЯ» С ВЕДУЩИМИ</h3>
                    <a href="#" class="btn">СМОТРЕТЬ</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <h2 class="section-title">АКЦИИ И<br>СКИДКИ</h2>
        <div class="promo-item">
            <div class="promo-badge">20%</div>
            <div class="promo-text">
                <h3>СКИДКА НА ПЕРВУЮ ИГРУ</h3>
                <p>Скидка 20% на первую игру с ведущим. Действует до 31 мая.</p>
                <a href="stock.php" class="link-green">ПОДРОБНЕЕ</a>
            </div>
        </div>
        <div class="promo-item">
            <img src="images/скидка за комплект.jpg" alt="Скидка за комплект" class="promo-img">
            <div class="promo-text">
                <h3>СКИДКА ЗА КОМПЛЕКТ</h3>
                <p>Купи две настольные игры - получи третью в подарок.</p>
               <a href="stock.php" class="link-green">ПОДРОБНЕЕ</a>
            </div>
        </div>
        <div class="promo-item">
            <img src="images/все включено.jpg" alt="Все включено" class="promo-img">
            <div class="promo-text">
                <h3>ВСЕ ВКЛЮЧЕНО</h3>
                <p>Набор игр + ведущий на 2 час. Стоит выгоднее.</p>
               <a href="stock.php" class="link-green">ПОДРОБНЕЕ</a>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-nav">
             <a href="../index.php">главная</a>
    <a href="catalog.php">каталог</a>
    <a href="stock.php">акция</a>
    <a href="login.php">вход</a>
    <a href="registration.php">регистрация</a>
        </div>
        <div class="footer-info">
            <div class="footer-col">
                <div class="logo-footer">
                    <img src="images/логотип.png" alt="Логотип" class="logo-img">
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
                <p>На сайте используются материалы с сайта freepic.com</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
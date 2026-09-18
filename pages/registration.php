<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Магазин анти-гаджетов</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="header">
    <div class="container header-inner">
        <div class="logo">
            <img src="../images/логотип.png" alt="Логотип" class="logo-img">
            <span>БЕЗ<br>ЭКРАНА</span>
        </div>
        <nav class="nav">
            <a href="../index.php">главная</a>
            <a href="catalog.php">каталог</a>
            <a href="stock.php">акция</a>
            <a href="login.php">вход</a>
            <a href="registration.php">регистрация</a>
</nav>
<div></div>
    </div>
</header>
<section class="registration-page">
    <div class="registration-container">
        <div class="registration-form">
            <h1>Магазин анти-гаджетов</h1>
            <form class="form">
                <div class="form-group">
                    <label for="name">Введите ваше имя</label>
                    <input type="text" id="name" name="name" placeholder="Иван Иванов" required>
                </div>
                <div class="form-group">
                    <label for="email">Введите электронную почту</label>
                    <input type="email" id="email" name="email" placeholder="example@mail.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Введите пароль</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Подтвердите пароль</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn-register">Зарегистрироваться</button>
            </form>
            <div class="login-link">
                Уже есть аккаунт? <a href="login.html">Войти</a>
            </div>
        </div>
        <div class="registration-image">
            <img src="../images/настольные игры.jpg" alt="Настольные игры">
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
                    <img src="../images/логотип.png" alt="Логотип" class="logo-img">
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
</footer>
</body>
</html>
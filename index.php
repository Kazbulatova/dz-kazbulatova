<?php
$title = 'Главная';
require __DIR__ . '/includes/header.php';
?>
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
                    <img src="assets/images/ограбление в темноте.jpg" alt="Ограбление в темноте" class="card-img">
                    <div class="card-body">
                        <h3>СКОРО! ЭКШН-ИГРА<br>«ОГРАБЛЕНИЕ В ТЕМНОТЕ»!</h3>
                        <a href="#" class="btn">СМОТРЕТЬ</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/секретная комната.jpg" alt="Секретная комната" class="card-img">
                    <div class="card-body">
                        <h3>«СЕКРЕТНАЯ КОМНАТА»<br>С ВЕДУЩИМИ</h3>
                        <a href="#" class="btn">СМОТРЕТЬ</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/мафия.jpg" alt="Мафия с ведущими" class="card-img">
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
                    <a href="pages/stock.php" class="link-green">ПОДРОБНЕЕ</a>
                </div>
            </div>
            <div class="promo-item">
                <img src="assets/images/скидка за комплект.jpg" alt="Скидка за комплект" class="promo-img">
                <div class="promo-text">
                    <h3>СКИДКА ЗА КОМПЛЕКТ</h3>
                    <p>Купи две настольные игры - получи третью в подарок.</p>
                    <a href="pages/stock.php" class="link-green">ПОДРОБНЕЕ</a>
                </div>
            </div>
            <div class="promo-item">
                <img src="assets/images/все включено.jpg" alt="Все включено" class="promo-img">
                <div class="promo-text">
                    <h3>ВСЕ ВКЛЮЧЕНО</h3>
                    <p>Набор игр + ведущий на 2 час. Стоит выгоднее.</p>
                    <a href="pages/stock.php" class="link-green">ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
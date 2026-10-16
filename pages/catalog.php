<?php
$title = 'Каталог';
$base = '../';                                  // путь назад
require __DIR__ . '/../includes/header.php';
?>
    <section class="catalog-section">
        <div class="container">
            <div class="products-grid">
                <div class="product-card">
                    <img src="../assets/images/квизави.jpg" alt="Квизави" class="product-img">
                    <h3>Квест "Квизави"</h3>
                    <p>25 карт с вопросами по самым разным темам — от спорта до литературы. Играй один против всех или объединяйся с друзьями!</p>
                    <div class="price">2900 ₽</div>
                    <div class="card-buttons">
                        <a href="#" class="btn-blue">КУПИТЬ</a>
                        <a href="#" class="btn-green">СМОТРЕТЬ</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="../assets/images/черная книга.jpg" alt="Черная книга" class="product-img">
                    <h3>Настольная игра "Черная книга"</h3>
                    <p>Погрузитесь в атмосферу таинственности и ужаса. Исследуйте заброшенный особняк и разгадайте его мрачные секреты.</p>
                    <div class="price">3700 ₽</div>
                    <div class="card-buttons">
                        <a href="#" class="btn-blue">КУПИТЬ</a>
                        <a href="#" class="btn-green">СМОТРЕТЬ</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="../assets/images/тайна особняка.jpg" alt="Тайна особняка" class="product-img">
                    <h3>Квест "Тайна особняка Блэквуд"</h3>
                    <p>Расследуйте загадочное исчезновение хозяина дома — миллионера Артура Блэквуда. Каждый игрок получает роль детектива.</p>
                    <div class="price">3100 ₽</div>
                    <div class="card-buttons">
                        <a href="#" class="btn-blue">КУПИТЬ</a>
                        <a href="#" class="btn-green">СМОТРЕТЬ</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="../assets/images/набор.jpg" alt="Зомби-апокалипсис" class="product-img">
                    <h3>Набор "Выживание: Зомби-апокалипсис"</h3>
                    <p>Будь готов к любой ситуации! В наборе все необходимое для игры на выживание.</p>
                    <div class="price">2400 ₽</div>
                    <div class="card-buttons">
                        <a href="#" class="btn-blue">КУПИТЬ</a>
                        <a href="#" class="btn-green">СМОТРЕТЬ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
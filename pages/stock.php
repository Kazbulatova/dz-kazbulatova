<?php
$title = 'Каталог';
$base = '../';                                  // путь назад
require __DIR__ . '/../includes/header.php';
?>
<main class="promo-main">
    <div class="container promo-container">
        <div class="promo-image-wrapper">
            <img src="../assets/images/акция.jpg" alt="Настольные игры на столе" class="promo-image">
        </div>
        <div class="promo-content">
            <h1>Отключись на выходные и получи скидку 20%</h1>
            <p>С 1 по 7 июня при покупке любого набора настольных игр или квеста — скидка 20% на второй товар из категории «Цифровой детокс».</p>
            <a href="#" class="btn-promo-go">ПЕРЕЙТИ</a>
            <div class="promo-gift-box">
                <div class="gift-icon">🎁</div>
                <div class="gift-text">
                    <strong>Введите код OFFLINE10 при оформлении заказа и получите скидку 10% на первый заказ.Действует 7 дней.</strong>
            </div>
           <div class="promo-reviews">
                <div class="review-avatars">
                    <img src="../assets/images/человек1.jpg" alt="Отзыв 1">
                    <img src="../assets/images/человек2.jpg" alt="Отзыв 2">
                    <img src="../assets/images/человек3.jpg" alt="Отзыв 3">
                    <img src="../assets/images/человек4.jpg" alt="Отзыв 4">
                </div>
                <div class="review-stars">★★★★★</div>
            </div>
        </div>
    </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
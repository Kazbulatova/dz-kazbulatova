<?php
$title = 'Вход';
$base = '../';                                  // путь назад
require __DIR__ . '/../includes/header.php';
?>
    <section class="registration-page">
        <div class="registration-container">
            <div class="registration-form">
                <h1>Магазин анти-гаджетов</h1>
                <form class="form">
                    <div class="form-group">
                        <label for="email">Введите электронную почту</label>
                        <input type="email" id="email" name="email" placeholder="example@mail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Введите пароль</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>
                    <button type="submit" class="btn-register">Войти</button>
                </form>
                <div class="login-link">
                    Нет аккаунта? <a href="registration.php">Зарегистрироваться</a>
                </div>
            </div>
            <div class="registration-image">
                <img src="../assets/images/настольные игры.jpg" alt="Настольные игры">
            </div>
        </div>
    </section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
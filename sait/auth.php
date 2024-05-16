<?php session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demoexamen</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
<?php include 'header.php'; ?>
    <main class = "container_reg">
    <h2>Авторизация</h2>
    <form action="auth_process.php" method="post">
        <input type="login" name="login" placeholder="Введите логин" required><br>
        <input type="password" name="password" placeholder="Введите пароль" required><br>
        <button type="submit" class="button_signn">Войти</button>
    </form>
    </main>
   
    <div class="footer-separator"></div>
    <footer class="footer">
    <div class="footer_auth">
    <div class="footer__text">
        <p>Primer © 2024 Все права защищены</p>
        <a href="#">Политика конфиденциальности</a>
    </div>
    <div class="footer__social">
        <img src="img/pinterest.svg" alt="Pinterest" class="footer__social-item">
        <img src="img/vk.svg" alt="VK" class="footer__social-item">
        <img src="img/telegram.svg" alt="Telegram" class="footer__social-item">
        <img src="img/instagram.svg" alt="Instagram" class="footer__social-item">
    </div>
</footer>


</body>
</html>
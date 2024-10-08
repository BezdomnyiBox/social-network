<!DOCTYPE html>
<html lang="rus">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой чат</title>
    <link rel="stylesheet" href="../../public/style.css">

</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Вход в Мой чат</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text">Сообщение об ошибке</div>
                <div class="field input">
                    <label>Адрес email</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field input">
                    <input type="submit" value="Продолжить общение">
                </div>
            </form>
            <div class="link">
                Вы не зарегистрированы? <a href="../../public/index.php">Регистрация</a>
            </div>
        </section>
    </div>
</body>

</html>
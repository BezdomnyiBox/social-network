<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Регистрация в Мой чат</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text">Сообщение об ошибке</div>
                <div class="name-details">
                    <div class="field input">
                        <label>Фамилия</label>
                        <input type="text" name="fname" placeholder="Фамилия" required>
                    </div>
                    <div class="field input">
                        <label>Имя</label>
                        <input type="text" name="lname" placeholder="Имя" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Адрес email</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Начать общение">
                </div>
            </form>
            <div class="link">
                Вы зарегистрированы? <a href="login.php">Войти</a>
            </div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>

</html>
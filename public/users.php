<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <img src="#" alt="">
                    <div class="details">
                        <span>Toma</span>
                        <p>В сети</p>
                    </div>
                </div>
                <a href="#" class="logout">Выйти</a>
            </header>
            <div class="search">
                <span class="text">Найти чат</span>
                <input type="text" placeholder="Введите имя">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="#" alt="">
                        <div class="details">
                            <span>Toma</span>
                            <p>Привет !</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="#" alt="">
                        <div class="details">
                            <span>Toma</span>
                            <p>Привет !</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="#" alt="">
                        <div class="details">
                            <span>Toma</span>
                            <p>Привет !</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="#" alt="">
                        <div class="details">
                            <span>Toma</span>
                            <p>Привет !</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
            </div>
        </section>
    </div>

    <script src="js/users.js"></script>
</body>

</html>
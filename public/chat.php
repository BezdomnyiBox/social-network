<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="#"><i class="fas fa-arrow-left"></i></a>
                <img src="/img/IMG_1435.jpg" alt="">
                <div class="details">
                    <span>Володя</span>
                    <p>В сети</p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit aliquid laborum quos nihil quia debitis est neque doloremque autem provident consequatur nemo ipsam et voluptates, recusandae accusantium, ratione, dolores magnam?</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="/img/IMG_1435.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit aliquid laborum quos nihil quia debitis est neque doloremque autem provident consequatur nemo ipsam et voluptates, recusandae accusantium, ratione, dolores magnam?</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area">
                <input type="text" placeholder="Напиши здесь">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>

    <!-- <script src="js/users.js"></script> -->
</body>

</html>
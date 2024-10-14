<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "social network";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    echo "Ошибка соединения с базой данных" . mysqli_connect_error();
} else {
    // echo "Database connected!";
}

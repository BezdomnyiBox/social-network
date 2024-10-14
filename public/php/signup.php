<?php
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    //проверка на валидность email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //проверка на существование в БД данного email
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) { //email уже существует
            echo "$email - такой адрес email уже существует";
        } else {
            $status = "Active now"; //Только что зарегистрированный пользователь будет "в сети"
            $unique_id = rand(time(), 10000000); //ID его сессии
            $sql_2 = mysqli_query($conn,
                "INSERT INTO users (unique_id, fname, lname, email, password, status)
                VALUES ({$unique_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$status}')"
            );
            if($sql_2){ //если данные успешно сохранены
                $sql_3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                if(mysqli_num_rows($sql_3) > 0){
                    $row = mysqli_fetch_assoc($sql_3);
                    $_SESSION['unique_id'] = $row['unique_id']; //устанавливаем сессию для пользователя
                    echo "success";
                }
            }else{
                echo "Что-то пошло не так";
            }
        }
    } else {
        echo "$email - некорректный адрес";
    }
} else {
    echo "Необходимо заполнить все поля";
}

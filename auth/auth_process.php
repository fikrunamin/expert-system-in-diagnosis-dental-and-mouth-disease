<?php

require_once("../config.php");

if(isset($_POST['register'])){

    $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
    $phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email_address = filter_input(INPUT_POST, 'email_address', FILTER_VALIDATE_EMAIL);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $job = filter_input(INPUT_POST, 'job', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO users VALUES ('', :fullname, :phone_number, :email_address, :password, :gender, :job, :age, :role)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":fullname" => $fullname,
        ":phone_number" => $phone_number,
        ":email_address" => $email_address,
        ":password" => $password,
        ":gender" => $gender,
        ":job" => $job,
        ":age" => $age,
        ":role" => 'user'
    );

    $saved = $stmt->execute($params);
    if($saved) header("Location: /KBS/auth/login.php");
}

if(isset($_POST['login'])){

    $email_address = filter_input(INPUT_POST, 'email_address', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE email_address=:email_address";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":email_address" => $email_address,
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["login"] = $user;

            header("Location: /KBS/");
            exit();
        }
    }
}
<?php

use Aluno\ProjetoPhp\Config\Logger;

require_once('conn.php');

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE email=:email AND password=:password";
$conn = 0;
$result = $conn->prepare($sql);
$result->execute(['email'=> $email,'password' => $password]);
$user = $result->fetch();

if (!empty($user)){
    session_start();

    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    Logger::logger("Usuário fez login", "info");
    header('Location: ../src/views/index.php');
} else{
    echo 'usuário não cadastrado!';
    Logger::logger("Usuário não cadastrado", "error");
}
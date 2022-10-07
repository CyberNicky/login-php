<?php

include '../../User.php';

$user = new User('login', '192.168.1.109', 'root', 'localhost');

$username = $_POST['username'];
$password = $_POST['password'];


if ($user->exists($username, $password)) {
    session_start();

    $_SESSION['login'] = true;
    header("Location:member.php");
} else {
    header("Location:index.php?message=" . urlencode('incorrect username or password'));
    exit();
}

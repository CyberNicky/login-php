<?php

include '../../User.php';
include '../../utils/userValidation.php';


    $user = new User('login', '192.168.11.20', 'root', 'localhost');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['passwordConfirmation'];



    if ($user->usernameExists($username)) {
        header("Location:register.php?message=" . urlencode('username exists'));
        exit();
    

    }
    
    if ($passwordConfirmation != $password){
        header("Location:register.php?message=" . urlencode('A senha não são iguais'));
        exit();
    }
        
    if (!validationPassword($password)){
        header("Location:register.php?message=" . urlencode('A senha é fraca'));
        exit();
    }
    else {
        $user->create($username, $password);
        header("Location:index.php?message=" . urlencode('Conta criada com sucesso!'));
        exit();
    }


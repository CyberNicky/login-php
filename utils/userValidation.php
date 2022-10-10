<?php
## A-Z maiúscula
## Pelo menos 1 caracters especial
## 0-9 números (tem que ter pelo menos algum número)
## a-z minúscula
## 6-24 caracters ao total
function validationPassword($password){
    if (!preg_match('/^(?=.*[A-Z])(?=.*[!@#$&*.])(?=.*[0-9])(?=.*[a-z]).{6,24}$/', $password)) {
        echo 'A senha é fraca!';
        return false;
    }
    echo 'Válida';
    return true;
}
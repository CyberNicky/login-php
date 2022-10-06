<?php

include 'User.php';

$user = new User('login', 'localhost', 'root', 'localhost');

$user->create('admin', 'password');

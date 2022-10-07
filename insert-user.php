<?php

include 'User.php';

$user = new User('login', '192.168.1.109', 'root', 'localhost');

$user->create('admin02', '123');

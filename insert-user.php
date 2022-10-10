<?php

include 'User.php';

$user = new User('login', '192.168.11.20', 'root', 'localhost');

$user->create('admin', '123@$Ab');

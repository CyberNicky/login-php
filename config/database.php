<?php

function connection()
{
    $databaseHost = '192.168.11.20';
    $databaseUser = 'root';
    $databasePassword = 'localhost';
    $database = 'login';

    try {
        $connection = new mysqli($databaseHost, $databaseUser, $databasePassword, $database);

        return $connection;
    } catch (Throwable $error) {
        echo 'Connection failed: ' . $error->getMessage();
    }
}

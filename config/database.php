<?php

function connection()
{
    $databaseHost = 'localhost';
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

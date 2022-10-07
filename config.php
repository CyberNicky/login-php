<?php

include './config/database.php';

$connection = connection();

if ($connection) echo 'Connected Successfully';

mysqli_close($connection);

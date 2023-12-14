<?php

try {
    $dsn = 'mysql:hots=localhost;dbname=hospitale2n';

    $username = 'root';

    $password = '';

    $db = new PDO($dsn, $username, $password);
} catch (Exception $message) {

    echo "il y a un problème <br>" . $message;
}

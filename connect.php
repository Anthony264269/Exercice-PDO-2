<?php

try {
    $dsn = 'mysql:hots=localhost;dbname=hospitale2n';

    $username = 'root';

    $password = '';

    $database = new PDO($dsn, $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "la connexion a bien ete etablie";
} catch (PDOException $message) {

    echo "il y a un problème <br>" . $message;
}

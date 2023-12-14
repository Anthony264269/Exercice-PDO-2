<?php

if (
    isset($_POST['Lastname']) && !empty($_POST['Lastname']) &&
    isset($_POST['Firstname']) && !empty($_POST['Firstname']) &&
    isset($_POST['Birthdate']) && !empty($_POST['Birthdate']) &&
    isset($_POST['Phone']) && !empty($_POST['Phone']) &&
    isset($_POST['Mail']) && !empty($_POST['Mail'])


) {
    require_once('./connect.php');

    $requete = $database->prepare("INSERT INTO patients (lastname, firstname, birthdate, phone, mail) 
                    VALUES (:lastname,:firstname,:birthdate,:phone,:mail)");

    $result = $requete->execute([
        'lastname' => $_POST['Lastname'],
        'firstname' => $_POST['Firstname'],
        'birthdate' => $_POST['Birthdate'],
        'phone' => $_POST['Phone'],
        'mail' => $_POST['Mail'],
    ]);
}

header("Location: index.php");

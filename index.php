<?php
// 1 er étape
require_once('./connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ajout-patient.php" method="post">
        <label>Lastname:</label>
        <input name="lastname" id="lastname" type="text" />

        <label>Firstname:</label>
        <input name="Firstname" id="Firstname" type="text" />

        <label>Birthdate:</label>
        <input name="Birthdate" id="Birthdate" type="date" />

        <label>Phone:</label>
        <input name="Phone" id="Phone" type="tel" />

        <label>Mail:</label>
        <input name="Mail" id="Mail" type="mail" />

        <input type="submit" value="Valider">
        <input type="reset" value="reset">
    </form>
</body>

</html>
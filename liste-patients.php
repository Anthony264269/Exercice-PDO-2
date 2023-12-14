<?php
// 1 er étape
require_once('./connect.php');
$request = $database->query('SELECT * FROM patients');
$patients = $request->fetchAll();
foreach ($patients as $patient) {
    echo ('<br>'.$patient['lastname'] . " " . $patient['firstname'] ." ".$patient['birthdate'] ." ".$patient['phone'] ." ".$patient['mail'].'<br>');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style .css">
    <title>Document</title>
</head>

<body>
<a href="./ajout-patient.php">Inscription patient</a>
        
    </form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<?php
include_once('./partials/header.php');
?>



<body id="body-index">
    <main class="container-md">
        <h2 class="d-flex justify-content-center mb-5 mt-5">Liste patients coucou</h2>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col"></th>


                </tr>
            </thead>
            <tbody>
                <?php
                // 1 er étape
                require_once('./connect.php');
                $request = $database->query('SELECT * FROM patients');
                $patients = $request->fetchAll();


                foreach ($patients as $patient) { ?>

                    <tr>
                        <td><?php echo $patient["id"] ?></td>
                        <td><?php echo $patient["firstname"] ?></td>
                        <td><?php echo $patient["lastname"] ?></td>
                        <td><a href="./profil-personnel-patient.php?id=<?= $patient["id"]?>">Plus d'information</a></td>
                    <?php } ?>
    </main>
</body>

<?php
include_once('./partials/footer.php')
?>
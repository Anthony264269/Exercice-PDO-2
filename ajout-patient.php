<?php
// 1 er étape
require_once('./connect.php');

?>
<?php
include_once('./partials/header.php');
?>






<body id="body-index">
    <main class="container-md">
    <h2 class="d-flex justify-content-center mb-5 mt-5">Ajout patient</h2>
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50%;">

                <div class="card-body">
                    <form action="./bd.php" method="post">

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Nom:</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Prénom:</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                        <div class="mb-3">
                            <label for="birthdate" class="form-label">Date de naissance:</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Téléphone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="mail" name="mail">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </main>
</body>

<?php
include_once('./partials/footer.php')
?>
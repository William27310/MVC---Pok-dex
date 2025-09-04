<?php

// var_dump($touslesPokemons);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid justify-content-around">
            <a class="navbar-brand text-white fw-bold" href="?generation=1">Génération 1</a>
            <a class="navbar-brand text-white fw-bold" href="home.php">Génération 2</a>
            <a class="navbar-brand text-white fw-bold" href="home.php">Génération 3</a>
            <a class="navbar-brand text-white fw-bold" href="home.php">Génération 4</a>
        </div>
    </nav>
    <!-- <div class="bg-dark pb-2 mb-2 pt-2 d-flex justify-content-center">
        <form class="d-flex bg-dark" role="search" style="width: 25rem;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
    </div> -->

    <div class="container">
    <div class="row justify-content-around gap-5 mt-5 mb-5">
            <?php foreach ($touslesPokemons as $pokemon) { ?>
                <div class="card text-white row" style="max-width: 18rem;">
                    <img src="<?= $pokemon['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text mt-5"><span class="fw-bold">ID : </span> <?= $pokemon['id'] ?></p>
                        <p class="card-text"><span class="fw-bold">Nom : </span><?= $pokemon['name'] ?></p>
                        <p class="card-text"><span class="fw-bold">Type : </span><?= implode(', ', $pokemon['type']) ?> </p>
                        <p class="card-text"><span class="fw-bold">Description : </span><?= $pokemon['description'] ?></p>
                        <p class="card-text"><span class="fw-bold">Génération : </span><?= $pokemon['generation'] ?></p>
                    </div>
                </div>
            <?php } ?>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
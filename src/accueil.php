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
            <a class="navbar-brand text-white fw-bold" href="index.php?url=home/1">Génération 1</a>
            <a class="navbar-brand text-white fw-bold" href="index.php?url=home/2">Génération 2</a>
            <a class="navbar-brand text-white fw-bold" href="index.php?url=home/3">Génération 3</a>
            <a class="navbar-brand text-white fw-bold" href="index.php?url=home/4">Génération 4</a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid justify-content-around">
            <a class="navbar-brand text-white fw-bold" href="#">Filtrer</a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Types
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-white fw-bold" href="#">Action</a></li>
                        <li><a class="dropdown-item text-white fw-bold" href="#">Another action</a></li>
                        <li><a class="dropdown-item text-white fw-bold" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


    <!-- <div class="bg-dark pb-2 mb-2 pt-2 d-flex justify-content-center">
        <form class="d-flex bg-dark" role="search" style="width: 25rem;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
    </div> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid justify-content-around">
            <a class="navbar-brand text-white fw-bold" href="home.php">Génération 1</a>
            <a class="navbar-brand text-white fw-bold" href="home.php">Génération 2</a>
            <a class="navbar-brand text-white fw-bold" href="home.php">Génération 3</a>
            <a class="navbar-brand text-white fw-bold" href="home.php">Génération 4</a>
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

    <div class="row cardy justify-content-center">
        <div class="card mb-3 mt-5 mb-5 col-7">
            <div class="row p-4">
                <div class="col-md-4">
                    <img src="<?= $pokemon['image'] ?> " class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-white mt-5">
                        <p class="card-text mt-3"><span class="fw-bold">ID : </span> <?= $pokemon['id'] ?></p>
                        <p class="card-text"><span class="fw-bold">Nom : </span><?= $pokemon['name'] ?></p>
                        <p class="card-text"><span class="fw-bold">Type : </span><?= implode(', ', $pokemon['type']) ?> </p>
                        <p class="card-text mt-3"><span class="fw-bold">Description : </span> <?= $pokemon['description'] ?></p>
                        <button class="btn btn-outline-light"><span class="fw-bold"><a href="index.php?url=home" class="text-decoration-none text-white">Retour</a></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
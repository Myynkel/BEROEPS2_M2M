<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JamLink - Muziek Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <img class="logo" src="../img/logo.png">
        <a class="navbar-brand" href="index.html">Jam Link</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto"> <!--ms-auto zorgt er voor dat het naar de rechterkant wordt verplaatst-->
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="">Nieuws</a>
                <a class="nav-link" href="">Muziek</a>
                <a class="nav-link" href="">Login/Registreer</a>
            </div>
        </div>
    </div>
</nav>

<header class="header text-center text-white">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="header-title">Jam Link</h1>
        <p class="header-subtitle">Ontdek je favoriete muziek, albums en artiesten op één plek.</p>
        <a href="#tracks" class="btn btn-primary mt-3">Ondek Muziek</a>
    </div>
</header>

<section id="tracks" class="tracks text-white mt-5 container">
    <h2 class="text-center mb-4">Top Tracks</h2>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-white">
            Track 1
            <a href="#" class="btn btn-sm btn-outline-light">Play</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-white">
            Track 2
            <a href="#" class="btn btn-sm btn-outline-light">Play</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-white">
            Track 3
            <a href="#" class="btn btn-sm btn-outline-light">Play</a>
        </li>
    </ul>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

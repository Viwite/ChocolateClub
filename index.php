<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Chocolate Club</title>

    <meta name=”description" content=”Chokolade, salg">
    <meta name="robots" content="noindex, nofollow, all">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b2cd0c4e29.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>

<?php include "includes/navigation.php"; ?>

<nav class="navbar navbar-expand-lg bg-cremehvid">
    <div class="container-fluid">
        <div class="navbar-brand d-flex justify-content-between w-100"><a href="index.php">

                <img src="images/logo2.png" class="d-lg-none" style="max-width: 150px;"
                     alt="logo foto"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item d-none d-lg-block" style="max-width: 150px;">
                        <a href="index.php"><img src="images/logo2.png"
                                                 alt="logo foto"></a>
                    </li>
                    <li class="nav-item">
                        <a href="BygSelv.php"><h4 class="nav-link" style="color: #462f20">Vælg Selv</h4></a>
                    </li>
                    <li class="nav-item">
                        <a href="voreschokolade.php"><h4 class="nav-link" style="color: #462f20">Vores Chokolade</h4></a>
                    </li>
                    <li class="nav-item">
                        <a href="omos.php"><h4 class="nav-link" style="color: #462f20">Om Os</h4></a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php"><h4 class="nav-link" style="color: #462f20">Kontakt</h4></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<main id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/kaninmorreveonkel.png" class="d-block w-100" alt="chokolatiers">
            <div class="carousel-caption d-block">
                <button type="button" class="btn btn-cremehvid">
                    <a href="BygSelv.php"><h3 class="btn-text text-bruntext text-decoration-none">Click n' Collect</h3></a>
                </button>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/veg.png" class="d-block w-100" alt="veg">
            <div class="carousel-caption d-block">
                <button type="button" class="btn btn-cremehvid">
                    <a href="BygSelv.php"><h3 class="btn-text text-bruntext text-decoration-none">Click n' Collect</h3></a>
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/smagsproever.png" class="d-block w-100" alt="smagsproever">
            <div class="carousel-caption d-block">
                <button type="button" class="btn btn-cremehvid">
                    <a href="BygSelv.php"><h3 class="btn-text text-bruntext text-decoration-none">Click n' Collect</h3></a>
                </button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</main>

<section class="container-fluid bg-lime">

    <h1 class="text-1" style="text-align: center; color: #452f1f; font-family: Arial Rounded MT, sans serif">New</h1>
    <div class="row">
        <div class="col-12 col-lg">
            <div class="">
                <img src="images/bamse_forside.png" style="max-width: 20%;" class="small-image mx-auto my-5" alt="chokolade emballage bamse">
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="">
                <img src="images/rv_forside.png" style="max-width: 20%;" class="small-image mx-auto my-5" alt="chokolade emballage ræv">
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="">
                <img src="images/kanin_forside.png" style="max-width: 20%;" class="small-image mx-auto my-5" alt="chokolade emballage kanin">
            </div>
        </div>
    </div>
</section>

<section class="container-fluid bg-grøn">

    <div class="row">
        <div class="col-lg-6">
            <div class="container pb-5">
                <img src="images/chokofarm.png" alt="Avatar" class="image mt-5" style="width:100%">
                <div class="middle bg-cremehvid link">
                    <h3 class="text text-bruntext">Se hvor chokoladen kommer fra</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="container pb-5">
                <img src="images/nicecream.png" alt="Avatar" class="image mt-5">
                <div class="middle bg-cremehvid link">
                    <h3 class="text text-bruntext">Besøg vores butik til en familie oplevelse</h3>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

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

<main id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/kaninmorreveonkel.png" class="d-block w-100" alt="chokolatiers">
            <div class="carousel-caption d-block">
                <button type="button" class="btn btn-cremehvid">
                    <a href="BygSelv.php"><h3 class="btn-text text-bruntext text-decoration-none">Bestil</h3></a>
                </button>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/væg1.png" class="d-block w-100" alt="interiør">
            <div class="carousel-caption d-block">
                <button type="button" class="btn btn-cremehvid">
                    <a href="BygSelv.php"><h3 class="btn-text text-bruntext text-decoration-none">Bestil</h3></a>
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/smagsproeververhellyeah.png" class="d-block w-100" alt="smagsprøver">
            <div class="carousel-caption d-block">
                <button type="button" class="btn btn-cremehvid">
                    <a href="BygSelv.php"><h3 class="btn-text text-bruntext text-decoration-none">Bestil</h3></a>
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
                <img src="images/chokoglass.png" class="small-image mx-auto my-5" alt="chokolade i glas">
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="">
                <img src="images/chokobidder.png" class="small-image mx-auto my-5" alt="chokolade bidder">
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="">
                <img src="images/choko%20balls.png" class="small-image mx-auto my-5" alt="chokolade kugler">
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="">
                <img src="images/chokofirkant.png" class="small-image mx-auto my-5" alt="chokolade i firkantet æske">
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="">
                <img src="images/chokofirkantkannoet.png" class="small-image mx-auto my-5" alt=" en til chokolade i
                firkantet æske">
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="">
                <img src="images/chokosalg2%20v2.png" class="small-image mx-auto my-5" alt="chokolade salg">
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

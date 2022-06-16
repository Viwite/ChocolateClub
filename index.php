<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Chocolate Club</title>

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
                <a class="btn btn-cremehvid" href="BygSelv.php" role="button"><h3 class="btn-text text-bruntext text-decoration-none">Click n' Collect</h3></a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/veg.png" class="d-block w-100" alt="veg">
            <div class="carousel-caption d-block">
                <a class="btn btn-cremehvid" href="BygSelv.php" role="button"><h3 class="btn-text text-bruntext text-decoration-none">Click n' Collect</h3></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/smagsproever.png" class="d-block w-100" alt="smagsproever">
            <div class="carousel-caption d-block">
                <button type="button" class="btn btn-cremehvid" role="button">
                    <a class="btn btn-cremehvid" href="BygSelv.php" role="button"><h3 class="btn-text text-bruntext text-decoration-none">Click n' Collect</h3></a>
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

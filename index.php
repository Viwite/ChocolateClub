<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Chocolate Club</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php include "includes/navigation.php"; ?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item">
            <img src="images/væg.jpg" class="d-block w-100" alt="væg med chokolade">
        </div>
        <div class="carousel-item active">
            <img src="images/kaninmorreveonkel.png" class="d-block w-100" alt="forside">
        </div>
        <div class="carousel-item">
            <img src="images/smagsprøver%20hellyeah.jpg" class="d-block w-100" alt="smagsproever">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<br><br>

<div class="row">
    <div class="col-2">

    </div>
</div>

<?php include "includes/footer.php"; ?>
<body>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

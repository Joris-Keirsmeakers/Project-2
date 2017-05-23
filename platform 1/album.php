<?php


// $posts = Content::getPosts();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evoke - Herbeleef</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/album.css">
    <link rel="stylesheet" href="css/herbeleef.css">

    <link href="css/lightbox.css" rel="stylesheet">

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

</head>

<body>

<div class="topheader">
    <a href="herbeleef_fotos.php"><img src="img/icon_arrow.svg" alt="#"></a>
    <h1>Album 1</h1>
</div>

<div class="nav">
    <a class="nav_first" href="herbeleef_fotos.php">Foto's</a>
    <a class="nav_second" href="herbeleef_tekst.php">Tekst</a>
</div>

<div class="filter">
    <p>Sorteren op</p>
    <ul>
        <li><a href="#">Meest bekeken</a></li>
        <li><a href="#">Locatie (vak)</a></li>
    </ul>
</div>

<div class="album_gallery">

    <div class="album_item">
        <a href="img/album1.jpg" data-lightbox="set" data-title="My caption"><img src="img/album1.jpg" alt="#" ></a>
    </div>

    <div class="album_item">
        <a href="img/album2.jpg" data-lightbox="set" data-title="foto 2"><img src="img/album2.jpg" alt="#" ></a>
    </div>

    <div class="album_item">
        <a href="img/album3.jpg" data-lightbox="set" data-title="foto 2"><img src="img/album3.jpg" alt="#" ></a>
    </div>

    <div class="album_item">
        <a href="img/album5.jpg" data-lightbox="set" data-title="foto 2"><img src="img/album5.jpg" alt="#" ></a>
    </div>

</div>



<!-- <div class="album_gallery">
<?php foreach ($posts as $post):?>
    <div class="album_item">
        <a href="img/album1.jpg" data-lightbox="set" data-title="My caption"><img src="img/album1.jpg" alt="#" ></a> // HIER NOG PHP
    </div>
<?php endforeach; ?>
</div> -->










<footer>

    <nav class="icon-bar">
        <ul id="navigation">
            <li><a class="icon_home" href="home.php">Home</a></li>
            <li><a class="icon_herbeleef" href="herbeleef_fotos.php">Herbeleef</a></li>
            <li><a class="icon_create" href="create.php">Create</a></li>
            <li><a class="icon_challenge" href="challenge.php">Challenge</a></li>
            <li><a class="icon_profile" href="profile_instellingen.php">Profiel</a></li>
        </ul>
    </nav>

</footer>


<script src="js/lightbox.js"></script>


</body>
</html>

<?php
session_start();

spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoke</title>
    <link rel="stylesheet" href="../css/default.css" />
    <link rel="stylesheet" href="../css/profile.css"/>
    <link rel="stylesheet" href="../css/content.css"/>
    <link rel="stylesheet" href="../css/lightbox.css"/>



    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>
</head>
<body>

<section class="container">
    <div class="column left-half">
        <article>

        <div class="logo">
        <a href="home.php"><img src="../img/logo_index2.png"/></a>
    </div>

    <div id="menu-overlay"></div>
    <div id="menu">
        <ul class="ul_menu">
            <li ><a class="link_home" href="home.php">Home</a></li>
            <li class="parent">Gallerij
                <ul class="sub-nav">
                    <li><a href="gallerijFoto.php">Foto's</a></li>
                    <li><a href="gallerijTekst.php">Tekst</a></li>
                </ul>
            </li>


            <li class="parent">Dashboard
                <ul class="sub-nav">
                    <li><a href="resultaten.php">Resultaten</a></li>
                    <li><a href="sturing.php">Sturing</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <a class="logout" href="../logout.php">Uitloggen</a>

    <div class="footer">
        <div class="social">
            <ul>
                <li><a class="facebook" href="https://www.facebook.com/yrkvmechelen/">Fb</a></li>
                <li><a class="twitter" href="https://twitter.com/kvmechelen">TW</a></li>
                <li><a class="instagram" href="https://www.instagram.com/kvmechelen/">IN</a></li>
            </ul>
        </div>
    </div>


        </article>
    </div>

    <div class="column right-half">
        <article>

    <h1 class="title_right">Album 1</h1>
    <ul class="breadcrumb">
        <li><a href="home.php">Home</a></li>
        <li><a href="gallerij.php">Gallerij</a></li>
        <li><a href="gallerijFoto.php">Foto's</a></li>
        <li class="huidig">Album 1</li>
    </ul>

    <p class="sort">Sorteren op:</p>
    <ul class="filter">
        <li><a href="#">Meest recent</a></li>
        <li><a href="#">Locatie (vak)</a></li>
    </ul>

            <div class="album_gallery">

                <div class="album_item">
                    <a href="../img/background_home.jpg" data-lightbox="set" data-title="My caption"><img src="../img/background_home.jpg" alt="#" ></a>
                </div>

                <div class="album_item">
                    <a href="../img/background_index.jpg" data-lightbox="set" data-title="foto 2"><img src="../img/background_index.jpg" alt="#" ></a>
                </div>

            </div>
        </article>
    </div>


</section>

<script src="../js/lightbox.js"></script>
</body>
</html>

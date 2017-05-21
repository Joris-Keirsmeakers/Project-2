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
    <title>Evoke - Gallerij</title>
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/profile.css"/>

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
</head>
<body>

<section id="left">
    <div class="logo">
        <a href="home.php"><img src="img/logo_index.png"/></a>
        <h4>hier komt baseline</h4>
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


            <li class="parent">Profiel
                <ul class="sub-nav">
                    <li><a href="geposteMedia.php">Geposte media</a></li>
                    <li><a href="verzameldeMedia.php">Verzamelde media</a></li>
                    <li><a href="profielinstellingen.php">Instellingen</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <a class="logout" href="logout.php">Uitloggen</a>

    <div class="footer">
        <div class="social">
            <ul>
                <li><a class="facebook" href="https://www.facebook.com/yrkvmechelen/">Fb</a></li>
                <li><a class="twitter" href="https://twitter.com/kvmechelen">TW</a></li>
                <li><a class="instagram" href="https://www.instagram.com/kvmechelen/">IN</a></li>
            </ul>
        </div>
    </div>

</section>
<section id="right">

    <h1>Eigen creaties</h1>
        <ul class="breadcrumb">
            <li><a href="home.php">Home</a></li>
            <li><a href="gallerij.php">Gallerij</a></li>
            <li><a href="gallerijTekst.php">Tekst</a></li>
            <li class="huidig">Eigen creaties</li>
        </ul>


    </ul>

    <div id="album_gallery">
        <!-- HIER PHP foreach -->
        <div class="album_item">
            <a href="albumEigen_tekst.php"><img src="img/background_home.jpg" alt="#"></a>
            <p>Album 1</p>
        </div>


    </div>

</section>
</body>
</html>

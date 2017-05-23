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
    <title>Evoke - profiel</title>
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/content.css" />
    <link rel="stylesheet" href="css/profile.css"/>

    <link href="css/lightbox.css" rel="stylesheet">


    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
</head>
<body>

<section class="container">
    <div class="column left-half">

        <article>
            <div class="logo">
                <a href="home.php"><img src="img/logo_index2.png"/></a>
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
        </article>
    </div>
    <div class="column right-half">
        <article>

            <h1 class="title_right">Album 1</h1>
            <ul class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="gallerij.php">Gallerij</a></li>
                <li><a href="gallerijTekst.php">Tekst</a></li>
                <li class="huidig">Alles</li>
            </ul>

            <p class="sort">Sorteren op:</p>
            <ul class="filter">
                <li><a href="#">Meest recent</a></li>
                <li><a href="#">Meest bekeken</a></li>
                <li><a href="#">Locatie (vak)</a></li>
            </ul>

            <div class="post">
                <div class="post_left">
                    <p>User</p>
                </div>

                <div class="post_content">
                    <p>Lorem ipsum dolor sitem amet, consecteteur adisplicling elit</p>
                    <p class="post_date">25 maart 2017 - 19:35u</p>
                </div>
            </div>

            <div class="post">
                <div class="post_left">
                    <p>User</p>
                </div>

                <div class="post_content">
                    <p>Lorem ipsum dolor sitem amet, consecteteur adisplicling elit</p>
                    <p class="post_date">25 maart 2017 - 19:35u</p>
                </div>
            </div>

            <div class="post">
                <div class="post_left">
                    <p>User</p>
                </div>

                <div class="post_content">
                    <p>Lorem ipsum dolor sitem amet, consecteteur adisplicling elit</p>
                    <p class="post_date">25 maart 2017 - 19:35u</p>
                </div>
            </div>
        </article>
    </div>

</section>
<script src="js/lightbox.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoke - account aanmaken</title>
    <link rel="stylesheet" href="css/default.css" />
    <style>

        #right{
            background: url("img/background_home.jpg") center right no-repeat;
            background-size: cover;
            position: fixed;
            width: 70%;
            margin-left: 431px;
        }
    </style>

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


    <div class="column right-half_home">
<article>
    <h3>Wil je de vorige match herbeleven? </br>Neem dan zeker eens eens een kijkje naar alle foto's</h3>
    <a class="btn_gallerij" href="gallerijFoto.php">Bekijk</a>
</article>
</div>

</section>
</body>
</html>

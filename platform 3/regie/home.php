<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoke - account aanmaken</title>
    <link rel="stylesheet" href="../css/default.css" />

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>
    <style>

        #right{
            background: url("../img/background_home.jpg") center right no-repeat;
            background-size: cover;
            position: fixed;
            width: 70%;
            margin-left: 431px;
        }

    </style>
</head>
<body>

<section id="left">
    <div class="logo">
        <a href="home.php"><img src="../img/logo_index.png"/></a>
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


            <li class="parent">Dashboard
                <ul class="sub-nav">
                    <li><a href="resultaten.php">Resultaten</a></li>
                    <li><a href="sturing.php">Sturing</a></li>
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


</section>
</body>
</html>

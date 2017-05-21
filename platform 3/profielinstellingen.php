<?php
session_start();

spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});


$feedback = "";

// eerst de usergegevens gaan halen uit db
$user = new User();
$user->Username = $_SESSION['Username'];


if ($res =User::getUser($user->Username)) {
    $user->Username = $res['Username'];
} else {
    $feedback = "Failed to get user-data from database. Please reload to try again.";
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoke - profiel</title>
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

    <h1>Profielinstellingen</h1>
    <ul class="breadcrumb">
        <li><a href="home.php">Home</a></li>
        <li><a href="profielinstellingen.php">Profiel</a></li>
        <li class="huidig">Instellingen</li>
    </ul>

    <form action="" method="post" id="change_profile">
        <button class="btn_right" type="submit">Wijzig</button>

        <fieldset>
            <label>Gebruikersnaam</label>
            <input id="username" name="username" type="text" placeholder="Gebruikersnaam" value="<?php echo $user->Username; ?>"/>
        </fieldset>

        <fieldset>
            <label>Email</label>
            <input id="email" name="email" type="text" placeholder="Email" value="<?php echo $user->Mail; ?>"/>
        </fieldset>

    </form>

    <hr>

    <form action="" method="post" id="change_password">

        <button class="btn_right" type="submit">Opslaan</button>
        <h2>Wijzig wachtwoord</h2>

        <fieldset>
            <label>Huidig wachtwoord</label>
            <input id="password" name="password" type="password" placeholder=""/>
        </fieldset>

        <fieldset>
            <label>Nieuw wachtwoord</label>
            <input id="password" name="password" type="password" placeholder="Nieuw wachtwoord"/>
        </fieldset>

        <fieldset>
            <label>Herhaal wachtwoord</label>
            <input id="password" name="password" type="password" placeholder="Herhaal wachtwoord"/>
        </fieldset>


    </form>

    <hr>

    <div id="delete_account">
        <h2>Verwijder account</h2>
        <button class="btn_delete" type="submit">Verwijder definitief</button>
    </div>

</section>
</body>
</html>

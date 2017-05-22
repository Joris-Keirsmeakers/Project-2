<?php

session_start();
spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

<main>
    <h1>Welkom,</br> <span><?php echo $_SESSION['username']; ?></span></h1>

    <div class="home_text">
    <p>Welkom op Evoke, de nieuwe app van KV Mechelen, waarmee jij de sfeer en stadion-beleving mee helpt bepalen
        tijdens de match. </p> </br>

        <p>Tijdens de match kan je foto’s en reacties posten met een vooropgestelde hashtag.
            Elke match krijgt een nieuwe hashtag, zodat elke match een unieke belevening wordt. </p>  </br>

        <p>Vergeet ook niet in te loggen na de match op onze site, om alle foto’s en reacties te herbekijken. </p>  </br>
    </div>

    <div class="hashtag">
        <p>#Malinwa</p>
    </div>

    <a class="logout" href="logout.php">Uitloggen</a>

</main>

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


    <div class="icon_1">
        <a href="#" ></a>
    </div>


</footer>

</body>
</html>

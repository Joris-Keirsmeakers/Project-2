<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoke - Herbeleef</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/herbeleef.css">

</head>

<body>
<h1>Overzicht reacties</h1>


<div class="nav">
    <a class="nav_first" href="herbeleef_fotos.php">Foto's</a>
    <a class="nav_second" href="herbeleef_tekst.php">Tekst</a>
</div>



<section id="tekst">
    <div class="containerTekst">

        <div class="filter">
            <p>Sorteren op</p>
            <ul>
                <li><a href="#">Meest bekeken</a></li>
                <li><a href="#">Locatie (vak)</a></li>
                <li><a href="#">Recent</a></li>
            </ul>
        </div>

        <div class="post"> <!-- ophalen uit database! !-->
            <p class="post_left">User</p>

            <p>Lorem ipsum dolor sitem amet, consecteteur adisplicling elit</p>
            <p class="post_date">25 maart 2017 - 19:35u</p>
        </div>

    </div>

</section>

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



</body>
</html>

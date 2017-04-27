<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evoke - Herbeleef</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />

</head>

<body>

<h1>Profiel</h1>

<header>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="herbeleef_fotos.php">Herbeleef</a></li>
            <li><a href="create.php">Create</a></li>
            <li><a href="challenge.php">Challenge</a></li>
            <li><a href="profile_instellingen.php">Profiel</a></li>
        </ul>
    </nav>
</header>

<div class="nav">
    <a href="profile_instellingen.php">Instellingen</a>
    <a href="profile_gepost.php">Geposte media</a>
</div>

<section id="fotos">
    <div class="album"> <!-- ophalen uit database! !-->
        <a><img src="album.php" alt="#"></a>
        <p>Naam album</p>
        <p>aantal foto's</p>
    </div>
</section>

<div class="filter">
    <p>Sorteren op</p>
    <ul>
        <li><a href="#">Foto's</a></li>
        <li><a href="#">Tekst</a></li>
    </ul>
</div>

<section id="tekst">
    <div class="containerTekst">

        <div class="post"> <!-- ophalen uit database! !-->
            <p>User</p>
            <p>Lorem ipsum dolor sitem amet, consecteteur adisplicling elit</p>
            <p>25 maart 2017 - 19:35u</p>
        </div>

    </div>




</section>



</body>
</html>

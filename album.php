<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evoke - Herbeleef</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />

</head>

<body>

<h1>Naam album</h1>

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
    <a href="herbeleef_fotos.php">Foto's</a>
    <a href="herbeleef_tekst.php">Tekst</a>
</div>


<div class="filter">
    <p>Sorteren op</p>
    <ul>
        <li><a href="#">Meest bekeken</a></li>
        <li><a href="#">Locatie (vak)</a></li>
    </ul>
</div>

<section id="collection_fotos">
    <div class="collection"> <!-- ophalen uit database! !-->
        <a><img src="album.php" alt="#"></a>
    </div>

</section>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />

</head>

<body>
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

<main>
    <h1>Welkom, </br> <?php echo $_SESSION['Gebruikersnaam']?></h1>
    <p>Post alvast je foto's en reacties met de hashtag van deze match:</p>
    <p>#Malinwa</p>

    <a href="logout.php">Uitloggen</a>

</main>

</body>
</html>

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
    <nav class="icon-bar">
         <ul id="navigation">
            <li><a href="home.php">Home</a></li>
            <li><a href="herbeleef_fotos.php">Herbeleef</a></li>
            <li><a href="create.php">Create</a></li>
            <li><a href="challenge.php">Challenge</a></li>
            <li><a href="profile_instellingen.php">Profiel</a></li>
        </ul>
    </nav>



<main>
    <h1>Welkom, </br> <?php echo $_SESSION['Gebruikersnaam']?></h1>
    <p>Post alvast je foto's en reacties met de hashtag van deze match:</p>
    <p>#Malinwa</p>

    <a href="logout.php">Uitloggen</a>

</main>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evoke - Herbeleef</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/profile.css">

</head>

<body>

<h1>Profiel</h1>

<div class="nav">
    <a class="nav_first" href="profile_instellingen.php">Instellingen</a>
    <a class="nav_second" href="profile_gepost.php">Geposte media</a>
</div>

<form action="" method="post" id="settings">

    <fieldset id="fieldset_user">
        <label for="email">Gebruikersnaam</label>
        <input name="name" id="name" type="name"  />
        <button>Wijzig</button>
    </fieldset>

    <fieldset id="fieldset_email">
        <label for="email">Email</label>
        <input name="email" id="email" type="email"/>
        <button>Wijzig</button>
    </fieldset>


    <fieldset id="fieldset_paswoord">
        <p>Wijzig paswoord</p>
        <label for="paswoord">Huidig paswoord</label>
        <input name="paswoord" id="paswoord" type="password"/>

        <label for="paswoord">Nieuw paswoord</label>
        <input name="paswoord" id="paswoord" type="password"/>

        <label for="paswoord">Herhaal paswoord</label>
        <input name="paswoord" id="paswoord" type="password"/>

        <button>Opslaan</button>
    </fieldset>

    <fieldset id="fieldset_delete">
        <button type="submit">Verwijder account</button>
    </fieldset>
</form>

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

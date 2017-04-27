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

<form action="" method="post" id="settings">

    <fieldset>
        <label for="email">Gebruikersnaam</label>
        <input name="name" id="name" type="name"  />
        <button>Wijzig</button>
    </fieldset>

    <fieldset>
        <label for="email">Email</label>
        <input name="email" id="email" type="email"/>
        <button>Wijzig</button>
    </fieldset>

    <hr>

    <fieldset>
        <p>Wijzig paswoord</p>
        <label for="paswoord">Huidig paswoord</label>
        <input name="paswoord" id="paswoord" type="password"/>

        <label for="paswoord">Nieuw paswoord</label>
        <input name="paswoord" id="paswoord" type="password"/>

        <label for="paswoord">Herhaal paswoord</label>
        <input name="paswoord" id="paswoord" type="password"/>

        <button>Opslaan</button>
    </fieldset>

    <hr>

    <fieldset>
        <p>Verwijder account</p>
        <button type="submit">Verwijder definitief</button>
    </fieldset>
</form>

<p>Nog geen account? <a href="registration.php">Registreer</a></p>

</body>
</html>

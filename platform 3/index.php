<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoke - inloggen</title>
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>
<body>


<section class="container">
<div class="column left-half_index">
    <article>
    <div class="logo">
        <a href="index.php"><img src="img/logo_index2.png"/></a>
    </div>

    <form action="" method="post" id="login">

        <fieldset>
            <label for="username">Gebruikersnaam</label>
            <input name="username" id="username" type="text" placeholder="Geef hier je gebruikersnaam in" />
        </fieldset>

        <fieldset>
            <label for="password">Paswoord</label>
            <input name="password" id="password" type="password" placeholder="Geef hier je wachtwoord in"/>
        </fieldset>

        <fieldset id="stayloggin">
            <input type="checkbox" name="stayloggedin" value="ingelogd">Blijf ingelogd
            <a class="forgetPassword" href="#">Paswoord vergeten</a>
        </fieldset>

        <fieldset>
            <button class="button" type="submit">Inloggen</button>
        </fieldset>

        <p class="noAccount">Nog geen account? <a href="registration.php">Registreer</a></p>
    </form>

    <a class="supporterLogin"href="regie/index.php">Inloggen als regie</a>
    </article>
</div>

</div>

<div class="column right-half_index">
<article>
    <h1>Welkom bij Evoke</h1>
    <h4>de app voor een maximale stadionbeleving</h4>
</article>
</div>
</section>
</body>
</html>

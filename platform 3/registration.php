<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoke - account aanmaken</title>
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>
<body>

<section id="left">
    <div class="logo">
        <a href="registration.php"><img src="img/logo_index.png"/></a>
        <h4>hier komt baseline</h4>
    </div>

    <form action="" method="post" id="registration">

        <fieldset>
            <label for="username">Gebruikersnaam</label>
            <input name="username" id="username" type="text" placeholder="Geef hier je gebruikersnaam in" />
        </fieldset>

        <fieldset>
            <label for="email">Email</label>
            <input name="email" id="email" type="text" placeholder="Geef hier je emailadres in" />
        </fieldset>

        <fieldset>
            <label for="password">Paswoord</label>
            <input name="password" id="password" type="password" placeholder="Geef hier je wachtwoord in"/>
        </fieldset>

        <fieldset id="vak">
            <label>In welk vak bevindt u zich? <span><i>optioneel</i></span></label>
            <select>
                <option value="vak1">Vak 1</option>
                <option value="vak2">Vak 2</option>
                <option value="vak3">Vak 3</option>
                <option value="vak4">Vak 4</option>
            </select>
        </fieldset>

        <fieldset>
            <button class="button_account" type="submit">Account aanmaken</button>
        </fieldset>
    </form>


</section>

<section id="right">

</section>
</body>
</html>

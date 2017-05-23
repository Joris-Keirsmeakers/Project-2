<?php

spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});

if(!isset($_SESSION))
{
  session_start();
}

if (!empty($_POST)) {
    try {
        if (!empty($_POST['e-mailadres'] && $_POST['password'])) {
            $user = new User();

            $user->Mail = htmlspecialchars($_POST['e-mailadres']);
            $user->Password = htmlspecialchars($_POST['password']);

            if ($user->canLogin()) {
                $user->handleLogin();
            } else {
                $error = "<p class='alert alert-danger'> Failed to sign in. </p>";
            }
        } else {
            throw new exception("<p class='alert alert-danger'>Failed to sign in. All fields need to be filled in.</p>");
        }
    } catch (exception $e) {
        $error= $e->getMessage();
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evoke - login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/login.css">

    <style>
        .error{
            color:white;
            margin-left: 20px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
</head>


<body>

<div class="topheader">
    <a href="index.php"><img src="img/icon_arrow.svg" alt="#"></a>
    <h1>Inloggen</h1>
</div>

    <?php if (isset($error)):?>
        <div class="error">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

<form action="" method="post" id="login">

    <fieldset>
        <label for="e-mailadres">e-mailadres</label>
        <input name="e-mailadres" id="e-mailadres" type="text" placeholder="Geef hier je gebruikersnaam in" />
    </fieldset>

    <fieldset>
        <label for="password">Wachtwoord</label>
        <input name="password" id="password" type="password" placeholder="Geef hier je paswoord in"/>
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



</body>
</html>

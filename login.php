<?php

spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});

if (!empty($_POST)) {
    try {
        // gegevens opslaan
        $user = new User();

        // error handling voor lege velden
        if (empty($user->Mail = $_POST['email'])) {
            $error = "Veld 'email' mag niet leeg zijn ";
        } elseif (empty($user->Password = $_POST['password'])) {
            $error = "Veld 'wachtwoord' mag niet leeg zijn";
        }

        // enkel code doen indien alle velden ingevuld zijn
        if (!isset($error)) {

            if ($user->checkPassword()){

                $res = User::getUser($user->Mail);

                session_start();

                // we maken session vars aan voor later
                $_SESSION['email'] = $user->Mail;
                $_SESSION['username'] = $res['Username'];
                $_SESSION['fullname'] = $res['Fullname'];

                // we sturen de user door
                header('location:home.php');
            } else {
                $error = 'Wachtwoord komt niet overeen. Probeer opnieuw';
            }
        } else {
            $error = "Gebruiker bestaat niet, gelieve eerst een account aan te maken." . "</br>" . "<a href='registration.php'>Account aanmaken</a>";
        }
    } catch (PDOException $e) {
        $error = $e->getMessage();
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
        <label for="username">Gebruikersnaam</label>
        <input name="username" id="username" type="text" placeholder="Geef hier je gebruikersnaam in" />
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





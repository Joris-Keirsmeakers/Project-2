<?php

//vervangt includes, deze functie moet slechts 1 keer geschreven worden
spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});

// als er gesubmit is gaan we velden uitlezen
if (!empty($_POST)) {
    try {
        $options = [
            'cost'=> 12
        ];

        //lezen velden uit en steken dit in de waarden van de class user
        $user = new User();

        $res = "succes";
        $MinimumLength = 6;
        // we moeten deze get in een var steken omdat empty() een foutieve result teruggeeft als het een magic get is
        $email = $user->Mail = $_POST['email'];

        // error handling voor lege velden en het nakijken voor correct email adress
        if (empty($user->Username = $_POST["username"])) {
            $error = "Field 'Username' can not be empty.";
        } elseif (empty($email)) {
            $error = "Field 'Email' can not be empty.";
        } elseif (substr_count($email, "@") < 1 || substr_count(substr($email, strpos($email, "@")), ".") < 1) {
            $error = "hallo";
        } elseif (empty($user->Password = $_POST['password'])) {
            $error = "Field 'Password' can not be empty.";
        } elseif (strlen($user->Password) < $MinimumLength) {
            $error = "Your password has to be at least 6 characters long.";
        }

        $user->Username = htmlspecialchars($_POST["username"]);
        $user->Mail = htmlspecialchars($_POST["email"]);
        $user->Password = password_hash($_POST["password"], PASSWORD_DEFAULT, $options);


        // checken of er een error is door de lege velden
        if (!isset($error)) {
            if ($user->save()) {

                session_start();

                $_SESSION['email'] = $user->Mail;
                $_SESSION['username'] = $user->Username;
                $_SESSION['fullname'] = $user->Fullname;

                header('location: home.php');

            } else {
                // Niet OK
                $error = "This e-mail address is already in use in the database. Please try again with another address.";
            }

        }else{
        }
    } catch (PDOException $e) {
        $error= $e->getMessage();
    }
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evoke | account aanmaken</title>
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

<div class="topheader_registration">
    <a href="index.php"><img src="img/icon_arrow.svg" alt="#"></a>
    <h1>Account aanmaken</h1>
</div>

<div>
    <?php if (isset($error)):?>
        <div class="error">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
</div>

    <form method="post" name="loggin" action="#" id="registration"/>


    <fieldset>
        <label>Gebruikersnaam</label>
        <input id="username" name="username" type="text" placeholder="Vul je gebruikersnaam in"/>
    </fieldset>



    <fieldset>
        <label>Email</label>
        <input id="email" name="email" type="text" placeholder="Vul je emailadres in"/>
    </fieldset>

    <fieldset>
        <label>Wachtwoord</label>
        <input id="password" name="password" type="password" placeholder="Vul je wachtwoord in"/>
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
        <button class="button_registratie" name='submit' type="submit">Account aanmaken</button>

    </fieldset>

    </form>
</section>




</body>
</html>

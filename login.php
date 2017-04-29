<?php
spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});

if (!empty($_POST)) {
    try {

        $user = new User();

        if (empty($user->Email = $_POST['Email'])) {
            $error = "Email veld moet ingevuld worden";
        } elseif (empty($user->Paswoord = $_POST['Paswoord'])) {
            $error = "Paswoord veld moet ingevuld worden";
        }

        if (!isset($error)) {

            $conn = Db::getInstance();
            $statement = $conn->prepare("SELECT * FROM Users WHERE Email = :Email");
            $statement->bindValue(":Email", $user->Email);

            if ($statement->execute() && $statement->rowCount() != 0) {
                $res = $statement->fetch(PDO::FETCH_ASSOC);

                if (password_verify($user->Paswoord, $res['Paswoord'])) {
                    session_start();

                    $_SESSION['Email'] = $user->Email;
                    $_SESSION['Gebruikersnaam'] = $res['Gebruikersnaam'];

                    header('location:index.php'); // gebruiker doorsturen naar index pagina na inloggen
                } else {
                    $error = 'Paswoord komt niet overeen. Probeer opnieuw';
                }
            } else {
                $error = "Je hebt nog geen account aangemaakt" . "</br>" . "<a href='registration.php'>Registreer hier</a>";
            }
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
</head>
<body>

    <?php if (isset($error)):?>
        <div class="error">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

<div class="topheader">
    <a href="index.php"><img src="img/icon_arrow.svg" alt="#"></a>
    <h1>Inloggen</h1>
</div>

<form action="" method="post" id="login">

        <fieldset>
            <label for="email">Gebruikersnaam</label>
            <input name="name" id="name" type="name" placeholder="geef hier je gebruikersnaam in" />
        </fieldset>

        <fieldset>
            <label for="password">Paswoord</label>
            <input name="paswoord" id="paswoord" type="paswoord" placeholder="geef hier je paswoord in"/>
        </fieldset>

        <fieldset class="stayloggin">
            <input id="checkbox" type="checkbox" name="inloggen" value="ingelogd">
            <label class="stayLoggedin">Blijf ingelogd</label>
        </fieldset>


        <a class="forgetPassword" href="#">Paswoord vergeten</a>

        <fieldset>
            <button class="button" type="submit">Inloggen</button>
        </fieldset>
</form>

    <p class="noAccount">Nog geen account? <a href="registration.php">Registreer</a></p>


</body>
</html>





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
</head>
<body>

    <?php if (isset($error)):?>
        <div class="error">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form action="" method="post" id="login">

        <fieldset>
            <label for="email">Gebruikersnaam</label>
            <input name="name" id="name" type="name" placeholder="geef hier je gebruikersnaam in" />
        </fieldset>

        <fieldset>
            <label for="password">Paswoord</label>
            <input name="paswoord" id="paswoord" type="paswoord" placeholder="geef hier je paswoord in"/>
        </fieldset>

        <fieldset>
            <input type="checkbox" name="inloggen" value="ingelogd">Blijf ingelogd
        </fieldset>

        <a href="#">Paswoord vergeten</a>

        <fieldset>
            <button type="submit">Inloggen</button>
        </fieldset>
    </form>

    <p>Nog geen account? <a href="registration.php">Registreer</a></p>


</body>
</html>





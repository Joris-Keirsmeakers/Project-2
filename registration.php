<?php
spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});

if (!empty($_POST)) {
    try {
        $options = [
            'cost'=> 12
        ];

        $user = new User();

        $res = "succes";
        $MinimumLength = 6;
        $email = $user->Email = $_POST['Email'];

        // lege velden en nakijken correct email adress
        if (empty($user->Gebruikersnaam = $_POST["Gebruikersnaam"])) {
            $error = "Gebruikersnaam kan niet leeg zijn";
        } elseif (empty($Email)) {
            $error = "Email kan niet leeg zijn";
        } elseif (substr_count($Email, "@") < 1 || substr_count(substr($Email, strpos($Email, "@")), ".") < 1) {
            $error = "email adres is niet geldig";
        } elseif (empty($user->Paswoord = $_POST['Paswoord'])) {
            $error = "Paswoord kan niet leeg zijn";
        } elseif (strlen($user->Paswoord) < $MinimumLength) {
            $error = "Paswoord moet minstens 6 tekens lang zijn ";
        }

        $user->Gebruikersnaam = $_POST["Gebruikersnaam"];
        $user->Email = $_POST["Email"];
        $user->Paswoord = password_hash($_POST["paswoord"], PASSWORD_DEFAULT, $options);

        $conn= Db::getInstance();

        if (!isset($error)) {
            $statement = $conn->prepare("SELECT * FROM Users WHERE Email = :Email");
            $statement->bindValue(":Email", $user->EMail);

            if ($statement->execute() && $statement->rowCount() != 0) {
                $resultaat = $statement->fetch(PDO::FETCH_ASSOC);
                $error = "Email adres is al in gebruik";
                $res = false;
            } else {
                if ($res != false) {
                    $user->Save();
                    header("location:home.php");
                    session_start();

                } else {
                    $fail = "Oops, probeer opnieuw";
                    header("location:registration.php");
                }
            }
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
    <title>Evoke - Account aanmaken</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />


</head>
<body>

    <h2>Account aanmaken</h2>

    <div>
        <?php if (isset($error)):?>
            <div class="error">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
    </div>
    <form method="post" name="loggin" action="#" id="loggin"/>

    <fieldset>
        <label>Gebruikersnaam</label>
        <input id="username" name="username" type="text" placeholder="Geef hier je gebruikersnaam in"/>
    </fieldset>

    <fieldset>
        <label>Email</label>
        <input id="email" name="email" type="text" placeholder="Geef hier je email in"/>
    </fieldset>

    <fieldset>
        <label>Password</label>
        <input id="password" name="password" type="password" placeholder="Geef hier je paswoord in"/>
    </fieldset>

    <fieldset>
        <label>Bevestig password</label>
        <input id="password" name="password" type="password" placeholder="Bevestig hier je paswoord"/>
    </fieldset>

    <fieldset>
        <label>In welk vak bevindt u zich?</label>
        <select>
            <option value="vak1">Vak 1</option>
            <option value="vak2">Vak 2</option>
            <option value="vak3">Vak 3</option>
            <option value="vak4">Vak 4</option>
        </select>
    </fieldset>

    <fieldset>
        <input type="submit" name='submit' value="Account aanmaken" />
    </fieldset>

    </form>
</section>


</body>
</html>

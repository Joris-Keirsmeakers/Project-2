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
        $email = $user->Mail = $_POST['email'];

        if (empty($user->Username = $_POST["username"])) {
            $error = "Veld gebruikersnaam mag niet leeg zijn";
        } elseif (empty($email)) {
            $error = "Veld email mag niet leeg zijn";
        } elseif (substr_count($email, "@") < 1 || substr_count(substr($email, strpos($email, "@")), ".") < 1) {
            $error = "";
        } elseif (empty($user->Password = $_POST['password'])) {
            $error = "Veld wachtwoord mag niet leeg zijn";
        } elseif (strlen($user->Password) < $MinimumLength) {
            $error = "Wachtwoord moet minstens 6 karakters lang zijn";
        }

        $user->Username = $_POST["username"];
        $user->Mail = $_POST["email"];
        $user->Password = password_hash($_POST["password"], PASSWORD_DEFAULT, $options);

        $conn= Db::getInstance();

        if (!isset($error)) {
            $statement = $conn->prepare("SELECT * FROM users WHERE Mail = :mail");
            $statement->bindValue(":mail", $user->Mail);

            if ($statement->execute() && $statement->rowCount() != 0) {
                $resultaat = $statement->fetch(PDO::FETCH_ASSOC);
                $error = "Mail is al in gebruik";
                $res = false;
            } else {
                if ($res != false) {
                    $succes = "Welkom, je bent geregistreerd";
                    $user->Save();
                    header("location:home.php");
                    session_start();

                    $_SESSION['email'] = $user->Mail;
                    $_SESSION['username'] = $user->Username;
                    $_SESSION['password'] = $user->Password;
                } else {
                    $fail = "Oops, er is iets misgelopen! Probeer opnieuw!";
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
    <input id="username" name="username" type="text" placeholder="Geef gebruikersnaam in"/>
</fieldset>

<fieldset>
    <label>Email</label>
    <input id="email" name="email" type="text" placeholder="Geef emailadres in"/>
</fieldset>

<fieldset>
    <label>Password</label>
    <input id="password" name="password" type="password" placeholder="Geef paswoord in"/>
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


</body>
</html>

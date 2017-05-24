<?php
session_start();
spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/challenge.css">
    <link rel="stylesheet" href="css/camera.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



</head>


<body>

  <a href="create.php"></a>

  <div class="output">
    <img id="photo-check" <?php echo "src=./picture-posts/Test-match/". $_SESSION['id'].'-'.$_SESSION['postamount'].'.png'; ?> alt="The screen capture will appear in this box.">
  </div>


  <form method="post" id="comment-div">
  <label for="comment">Plaats een boodschap bij deze foto:</label>
    <textarea rows="4" name="comment" id="comment" maxlength="140"> </textarea>
    <button type="submit" class="button">Submit </button>
  </form>

</body>
<footer id="camera-footer">

    <nav class="icon-bar">
        <ul id="navigation">
            <li><a class="icon_home" href="home.php">Home</a></li>
            <li><a class="icon_herbeleef" href="herbeleef_fotos.php">Herbeleef</a></li>
            <li><a class="icon_create" href="create.php">Create</a></li>
            <li><a class="icon_challenge" href="challenge.php">Challenge</a></li>
            <li><a class="icon_profile" href="profile_instellingen.php">Profiel</a></li>
        </ul>
    </nav>
</footer><?php if (!empty($_POST['comment'])) {
  $content = new Content;
  $content->comment = $_POST['comment'];
  $content->Save();
  $user = new user;
  $user->id =$_SESSION['id'];
  $user->updatePostAmount();
  echo("<script> location.href = 'emotie.php' </script>");
  echo "test";
  include_once("./emotie.php");
}
?>
<br>
<script src="./js/latest-post.js"></script>

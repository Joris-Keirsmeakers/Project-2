<!DOCTYPE html>
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
  <div class="camera">
    <video id="video" class="center">Video stream not available.</video>
    <button id="startbutton">Take photo</button>
  </div>

  <canvas id="canvas">
  </canvas>

  <div class="output">
    <img id="photo" alt="The screen capture will appear in this box.">
  </div>

  <form method="post" id="uploadToDb">
    <input type="file" name="file" id="file"accept="image/*" class="hidden">
    <button type="submit" name="button" ></button>
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

</footer>
<?php include("SavetoFile.php")?>
<script src="./js/camera.js"></script>

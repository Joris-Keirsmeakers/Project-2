<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evoke - Herbeleef</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/album.css">

</head>

<body>

<div class="topheader">
    <a href="herbeleef_fotos.php"><img src="img/icon_arrow.svg" alt="#"></a>
    <h1>Naam album</h1>
</div>

<div class="nav">
    <a class="nav_first" href="herbeleef_fotos.php">Foto's</a>
    <a class="nav_second" href="herbeleef_tekst.php">Tekst</a>
</div>

<div class="filter">
    <p>Sorteren op</p>
    <ul>
        <li><a href="#">Meest bekeken</a></li>
        <li><a href="#">Locatie (vak)</a></li>
    </ul>
</div>

<section id="collection_fotos">
    <div class="collection"> <!-- ophalen uit database! !-->
            <img id="img" src="img/test.jpg" width="130" height="130" alt="kv mechelen">
            <div id="myModal" class="modal">
                <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
    </div>

</section>

<footer>

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


<script>

    var modal = document.getElementById('myModal');

    var img = document.getElementById('img');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }

</script>

</body>
</html>

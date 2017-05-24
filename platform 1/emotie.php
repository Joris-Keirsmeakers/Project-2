<?php
session_start();
//echo $_SESSION['lastUserContent'];
 ?>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script type="text/javascript">
    $(function() {

        $.ajax({
            url: "https://westus.api.cognitive.microsoft.com/emotion/v1.0/recognize" ,
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","02786af4033f4f51a9d26348c93af091");
            },
            type: "POST",
            // Request body
            data: '{"url": "https://keirsmaekerscreations.be/evoke/platform%201/picture-posts/Test-match/<?php echo $_SESSION["lastUserContent"] ?>"}',
        })
        .done(function(data) {
          //  alert("success");
            console.log(data)
            var fotodatatosend = data

            $.ajax({
              type:"POST",
              url:"./ajax/analyse.php",
              data:{"data" : fotodatatosend},
              datatype:"json"
            })

            .done(function(res) {
              console.log(res);
              location.href = 'after-analyse.php'
            })
        })

        .fail(function() {
          //  alert("error");
          console.log("error")

        });
    });
</script>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
  <h1>Analysing your picture!</h1>
  <p>Insert super awesome loading animation here</p>

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
  </body>

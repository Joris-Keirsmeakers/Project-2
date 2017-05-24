<?php
session_start();
echo $_SESSION['lastUserContent'];


 ?><!DOCTYPE html>
<html>
<head>
    <title>JSSample</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>

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
            data: '{"url": "http://www.wilmakarels.nl/images/image/foto-tips/groepsfoto-gezin.jpg"}',
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
              console.log(res)
            })
        })

        .fail(function() {
          //  alert("error");
          console.log("error")
        });
    });
</script>
</body>
</html>

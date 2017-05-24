<?php

session_start();
spl_autoload_register(function ($class) {
    include_once("classes/".$class.".php");
});

$happy = 4;
$angry =0;
$surprised =1;
$sad=0;
$disgusting=0;
$scared=0;
$contempt=0;

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/home.css">

    <!--Load the AJAX API-->
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">

     // Load the Visualization API and the corechart package.
     google.charts.load('current', {'packages':['corechart']});

     // Set a callback to run when the Google Visualization API is loaded.
     google.charts.setOnLoadCallback(drawChart);

     // Callback that creates and populates a data table,
     // instantiates the pie chart, passes in the data and
     // draws it.
     function drawChart() {

       // Create the data table.
       var data = new google.visualization.DataTable();
       data.addColumn('string', 'Topping');
       data.addColumn('number', 'Slices');
       data.addRows([
         <?php  echo"['Gelukkig',".$happy."],";
        echo" ['Boos', $angry],";
        echo" ['Verast', $surprised],";
        echo" ['Triest', $sad],";
        echo" ['Walging', $disgusting],";
        echo" ['angstig',$scared],";
        echo" ['minachtend',$contempt]";

        ?>

       ]);

       // Set chart options
       var options = {'title':'Hoe voelt de Inspiratiebeurs zich vandaag? ',
                      'width':300,
                      'height':300};

       // Instantiate and draw our chart, passing in some options.
       var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
       chart.draw(data, options);
     }
   </script>

  </head>
  <body>

    <div id="chart_div" class=chart_div></div>

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
</html>

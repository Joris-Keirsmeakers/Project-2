<?php
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://westus.api.cognitive.microsoft.com/emotion/v1.0/recognize');
$url = $request->getUrl();
$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => '02786af4033f4f51a9d26348c93af091',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
//$body = "https://pbs.twimg.com/profile_images/665548484385349633/5_GTaD8H_400x400.jpg";

  if (!empty($_POST['picture'])) {
      $body = $_POST['picture'];
      $request->setBody('{"url":"'.$body.'"}');

      try {
          $response = $request->send();
          $res = json_decode($response->getBody());
      } catch (HttpException $ex) {
          //echo $ex;
      }
  }

  if (!empty($_POST['file'])) {
      $body = $_POST['file'];
      $request->setBody($body);

      try {
          $response = $request->send();
          $res = json_decode($response->getBody());
      } catch (HttpException $ex) {
          //echo $ex;
      }
  }





?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <label for="picture">Img url</label>
      <input type="text" name="picture" id="picture">
      <br>
      <label for="file"></label> Upload file
       <input type="file" name="file" id="file"accept="image/*">
      <br>
      <button type="submit" name="button">Upload</button>
    </form>
  <?php echo "https://pbs.twimg.com/profile_images/665548484385349633/5_GTaD8H_400x400.jpg"; ?>
  <br>



<?php echo "<img src=".$_POST['picture'].">";
   if (!empty($res)) {

      print_r($res);
    foreach ($res as $face ) {
      echo "<div class='face'>";

    print_r($face);
        //  include_once 'analyse.php';
        //var_dump($res['0']);

        //print_r($res['0']->scores);

        $scores = [
          'anger' => $face->scores->anger,
          'contempt' => $face->scores->contempt,
          'disgust' => $face->scores->disgust,
          'fear' => $face->scores->fear,
          'Happiness' => $face->scores->happiness,
          'neutral' => $face->scores->neutral,
          'Sadness' => $face->scores->sadness,
          'surprise' => $face->scores->surprise];



      $max_key = array_search(max($scores), $scores);
      echo "<h2>".$max_key."</h2>";

      echo '<p> Happiness: '.$face->scores->happiness.'</p>';
      echo '<p> Anger: '.$face->scores->anger.'</p>';
      echo '<p> Sadness: '.$face->scores->sadness.'</p>';
        //print_r($scores);
        $max = max($scores)*100;
        //echo $max;

        if ($max!=100) {
          $max_s = (string)$max;
          //echo $max_s;
          $maxpercent = substr($max_s, 0,2);
          $maxpercent = intval($maxpercent);
          //echo $maxpercent;
        }
        else {
          $maxpercent = $max;
        }



        echo "<p> This picture is ".$maxpercent."% ".$max_key."</p>";




        echo "</div>";
    }

  } ?>
  </body>
</html>

<style media="screen">
  .face{
font-family: sans-serif;
background-color: #ccc;


  }
</style>

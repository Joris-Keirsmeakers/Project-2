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
      <button type="submit" name="button">Upload</button>
    </form>
  <?php   echo "https://pbs.twimg.com/profile_images/665548484385349633/5_GTaD8H_400x400.jpg"; ?>
  <br>




<?php if (!empty($res)) {


  print_r($res);

    //  include_once 'analyse.php';
    //var_dump($res['0']);
    echo "<br>";
    //print_r($res['0']->scores);
    echo "</br>";
    echo "<img src=".$_POST['picture'].">";
    echo '<p> Happiness: '.$res['0']->scores->happiness.'</p>';
    echo '<p> Anger: '.$res['0']->scores->anger.'</p>';
    echo '<p> Sadness: '.$res['0']->scores->sadness.'</p>';
    echo "</br>";
    $scores = [
      'anger' => $res['0']->scores->anger,
      'contempt' => $res['0']->scores->contempt,
      'disgust' => $res['0']->scores->disgust,
      'fear' => $res['0']->scores->fear,
      'Happiness' => $res['0']->scores->happiness,
      'neutral' => $res['0']->scores->neutral,
      'Sadness' => $res['0']->scores->sadness,
      'surprise' => $res['0']->scores->surprise];



  $max_key = array_search(max($scores), $scores);
  echo "<h2>".$max_key."</h2>";


    //print_r($scores);
    $max = max($scores)*100;
    //echo $max;
    $max_s = (string)$max;
    //echo $max_s;
    $maxpercent = substr($max_s, 0,2);
    //echo $maxpercent;
    $maxpercent = intval($maxpercent);

    echo "<p> This picture is ".$maxpercent."% ".$max_key."</p>";

} ?>


  </body>
</html>

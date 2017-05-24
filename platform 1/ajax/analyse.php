<?php
session_start();
spl_autoload_register(function ($class) {
    include_once("../classes/".$class.".php");});

$res=$_POST['data'];
   if (!empty($res)) {

      $faceNo = count($res);
      echo $faceNo;

      echo $_SESSION['lastUserContent'];
     foreach ($res as $face ) {

       $averageEmotion=[];

         $scores = [
           'anger' => $face['scores']['anger'],
           'contempt' => $face['scores']['contempt'],
           'disgust' => $face['scores']['disgust'],
           'fear' => $face['scores']['fear'],
           'happiness' => $face['scores']['happiness'],
           'neutral' => $face['scores']['neutral'],
           'Sadness' => $face['scores']['sadness'],
           'surprise' => $face['scores']['surprise']
         ];

         print_r($scores);

       $max_key = array_search(max($scores), $scores);
       array_push($averageEmotion,$max_key);
     }

print_r($averageEmotion);

$result = array_count_values($averageEmotion);
asort($result);
end($result);
$emotion = key($result);
echo $emotion;
/*
    //$max = max($avgpercent)*100;
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

echo $maxpercent;
//print_r($avgscores);
//print_r($avgpercent);
*/
$conn = Db::getInstance();
$statement = $conn->prepare("INSERT INTO `emotionaldata` (`photo`, `user_id`, `emotion`) VALUES (:photo,:user_id,:emotion)");
$statement->bindValue(":photo",$_SESSION['lastUserContent']);
$statement->bindValue(":user_id",$_SESSION['id']);
$statement->bindValue(":emotion",$emotion);
$res=$statement->execute();
}
?>

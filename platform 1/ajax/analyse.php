<?php
session_start();
spl_autoload_register(function ($class) {
    include_once("../classes/".$class.".php");});

$res=$_POST['data'];
   if (!empty($res)) {

      $faceNo = count($res);
      echo $faceNo;
      $averageEmotion=[
      ];
      echo $_SESSION['lastUserContent'];
     foreach ($res as $face ) {



         $scores = [
           'anger' => $face['scores']['anger'],
           'contempt' => $face['scores']['contempt'],
           'disgust' => $face['scores']['disgust'],
           'fear' => $face['scores']['fear'],
           'happiness' => $face['scores']['happiness'],
           'sadness' => $face['scores']['sadness'],
           'surprise' => $face['scores']['surprise']
         ];

      print_r($scores);

       $max_key = array_search(max($scores), $scores);
       $averageEmotion[]=$max_key;
     }

print_r($averageEmotion);

$result = array_count_values($averageEmotion);
asort($result);
end($result);
$emotion = key($result);
echo $emotion;

$conn = Db::getInstance();
$statement = $conn->prepare("INSERT INTO `emotionaldata` (`photo`, `user_id`, `emotion`) VALUES (:photo,:user_id,:emotion)");
echo $_SESSION['lastUserContent'];
$statement->bindValue(":photo",$_SESSION['lastUserContent']);
echo $_SESSION['id'];
$statement->bindValue(":user_id",$_SESSION['id']);
$statement->bindValue(":emotion",$emotion);
$result=$statement->execute();
var_dump($result);
}
?>

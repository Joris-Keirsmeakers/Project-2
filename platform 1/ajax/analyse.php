<?php
session_start();
spl_autoload_register(function ($class) {
    include_once("../classes/".$class.".php");});

$res=$_POST['data'];
   if (!empty($res)) {
     $avgscores=[
       'anger'=>[],
       'contempt'=>[],
       'disgust'=>[],
       'fear'=>[],
       'happiness'=>[],
       'neutral'=>[],
       'sadness'=>[],
       'surprise'=>[]
     ];

      $faceNo = count($res);
      echo $faceNo;

      echo $_SESSION['lastUserContent'];
     foreach ($res as $face ) {


         $scores = [
           'anger' => $face['scores']['anger'],
           'contempt' => $face['scores']['contempt'],
           'disgust' => $face['scores']['disgust'],
           'fear' => $face['scores']['fear'],
           'Happiness' => $face['scores']['happiness'],
           'neutral' => $face['scores']['neutral'],
           'Sadness' => $face['scores']['sadness'],
           'surprise' => $face['scores']['surprise']
         ];

            array_push($avgscores['anger'],$face['scores']['anger']);
            array_push($avgscores['disgust'],$face['scores']['disgust']);
            array_push($avgscores['contempt'],$face['scores']['contempt']);
            array_push($avgscores['fear'],$face['scores']['fear']);
            array_push($avgscores['happiness'],$face['scores']['happiness']);
            array_push($avgscores['neutral'],$face['scores']['neutral']);
            array_push($avgscores['sadness'],$face['scores']['sadness']);
            array_push($avgscores['surprise'],$face['scores']['surprise']);
}
            $anger = (array_sum($avgscores['anger'])/$faceNo);
            $contempt = (array_sum($avgscores['contempt'])/$faceNo);
            $neutral=(array_sum($avgscores['neutral'])/$faceNo);
            $fear=(array_sum($avgscores['fear'])/$faceNo);
            $happiness=(array_sum($avgscores['happiness'])/$faceNo);
            $sadness=(array_sum($avgscores['sadness'])/$faceNo);
            $surprise=(array_sum($avgscores['surprise'])/$faceNo);
            $disgust=(array_sum($avgscores['disgust'])/$faceNo);

         print_r($scores);
       $max_key = array_search(max($scores), $scores);



 $avgpercent=[
  'anger' => $anger,
  'contempt' =>$contempt,
  'neutral' =>$neutral,
  'fear' =>$fear,
  'Sadness' =>$sadness,
  'Happiness' =>$happiness,
  'surprise' =>$surprise];

  foreach ($avgpercent as $percent) {
    echo$percent;
  }
    $max = max($avgpercent)*100;
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

$conn = Db::getInstance();
$statement = $conn->prepare("INSERT INTO `emotionaldata` (`photo`, `anger`, `contempt`, `disgust`, `fear`, `happiness`,`neutral`, `sadness`, `surprise`) VALUES (:photo,:anger,:contempt,:disgust, :fear, :happiness,:neutral,:sadness,:surprise)");
$statement->bindValue(':photo', $_SESSION['lastUserContent']);
$statement->bindValue(':anger', $anger);
$statement->bindValue(':contempt',$contempt);
$statement->bindValue(':disgust',$disgust);
$statement->bindValue(':neutral',$neutral);
$statement->bindValue(':fear',$fear);
$statement->bindValue(':happiness',$happiness);
$statement->bindValue(':sadness',$sadness);
$statement->bindValue(':surprise',$surprise);
$res=$statement->execute();




}
?>

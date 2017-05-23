<?php
$data = $_POST['data'];
$id=$_SESSION['id'];

$number=$_SESSION['postamount'];
echo $number;
$file = md5(uniqid()) . '.png';
//$file = $_SESSION['id'].'-'.$_SESSION['postamount'].'.png';
//rename($file,$_SESSION['id'].'-'.$_SESSION['postamount'].'.png');

// remove "data:image/png;base64,"
$uri =  substr($data,strpos($data,","));

// save to file
file_put_contents('../picture-posts/Test-match'.$file, base64_decode($uri));

// return the filename
echo json_encode($file);
?>

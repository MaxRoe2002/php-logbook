<?php

$servername = 'localhost';
$db_name = 'monster';
$username = 'root';
$password = '';
  
$connect = mysqli_connect($servername, $username, $password, $db_name);

// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name']; 
$audio = $_FILES['monsteraudio']['tmp_name'];

  // Get the file binary data
  $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
  $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
   
  $sql = "INSERT INTO monster";
  $sql .= "(name, image, audio) ";
  $sql .= "VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

  $result = mysqli_query($connect,$sql);

   mysqli_close($connect);
?>

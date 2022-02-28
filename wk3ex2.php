<?php
  if ($_POST["txtage"] < 21) 
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }
  if($_POST("male") ==true)
  {
      echo "You are a Male<br/>";
  }
  else
  {
      echo "You are a Female<br/>";
  }
?>

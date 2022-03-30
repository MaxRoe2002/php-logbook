<?php
session_start();
echo "<h2> Your order qty is {$_SESSION["selqty"]} </h2><br>";
echo "<h2> The selected colour is {$_POST["selcolour"]}.</h2>";
$total = 0;

if($_POST)
{
   $selqty = $_SESSION["selqty"];
   $selsize = $_SESSION["selsize"];

   if($selsize == "Small (£15.75)") 
   {
      $total = $selqty * 15.75;
   }
   else if($_SESSION["selsize"] == "Medium (£16.75)")
   {
      $total = $selqty * 16.75;
   }
   else if($_SESSION["selsize"] == "Large (£17.75)")
   {
      $total = $selqty * 17.75;
   }
   else if($_SESSION["selsize"] == "Extra Large (£18.75)")
   {
      $total = $selqty * 18.75;
   }

   else
   {
      echo "There is no price for your widgets";
   }
   echo("<h2>The total price is $total</h2>");
}
?>

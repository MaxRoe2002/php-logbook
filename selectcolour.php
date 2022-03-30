<html>
  <head><title>Select colour page</title></head>
    <body>
     <?php session_start();?>
     <?php $_SESSION["selqty"]=$_POST["selqty"]; ?>
     <?php $_SESSION["selsize"]=$_POST["selsize"]; ?>
      <form action="confirmation.php"  method="post">
	Select the colour for the widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	

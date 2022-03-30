<html>
 <head>
  <title>Widget Sizes</title>
 </head>
 <body>
  <form  action="selectcolour.php" method="post">
   Select the size of widgets you require
   <select name="selsize">
    <option>Small (£15.75)</option>
    <option>Medium (£16.75)</option>
    <option>Large (£17.75)</option>
    <option>Extra Large (£18.75)</option>
      </select>
      <br/><br/>
   <input type="submit" value="Buy"/>
   <input type = "hidden" name = "selqty"
   value = "<?php echo $_POST ["selqty"]?>"/>
  </form>
 </body>
</html>
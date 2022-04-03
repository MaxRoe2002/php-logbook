<?php	
    $servername = 'localhost';
    $db_name = 'db1_gwalke01;';
    $username = 'root';
    $password = '';

	// Connect to server and select database
    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if(mysqli_connect_errno())
    {
        echo "Failed to connect: " . mysqli_connect_error();
    }

	$sql = "SELECT * from test";
	// Execute sql statement
	$result = mysqli_query($connect,$sql);

?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name]</a></br>";  	
}
?>
</body>
</html>

<?php	
    $id = $_GET['id'];
    setcookie('id', $id);

    // Connect to server and select database
    $servername = 'localhost';
    $db_name = 'db1_gwalke01;';
    $username = 'root';
    $password = '';

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if(mysqli_connect_errno())
    {
        echo "Failed to connect: " . mysqli_connect_error();
    }

	$sql = "SELECT * from test where ID = $id ";
	
    // Execute query
    $result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action="wk6ex2action2.php" method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row['email'] ?>" />
	</br>
	<input type=submit name=btnsubmit value="Save"/>
    <input type=submit name=btnsubmit value="Delete"/>
</form>
</body>
</html>

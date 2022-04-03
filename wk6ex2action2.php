<?php	
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

   if($_POST['btnsubmit'] == "Save")
   {
       $sql = "UPDATE test set phone_number = '{$_POST["txttelno"]}', email = '{$_POST["txtemail"]}' where ID = '{$_COOKIE["id"]}'";
   }
   if($_POST['btnsubmit'] == "Delete")
   { 
       $sql = "DELETE from test where ID = '{$_COOKIE["id"]}'";
   }

   $result = mysqli_query($connect, $sql);
   if($result)
   {
       echo "<script>window.location = 'http://localhost/php-logbook/wk6ex2.php'</script>";
   }
   else
   {
       echo "Error updating record: " . mysqli_error($connect);
   }

?>
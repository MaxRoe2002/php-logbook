<?php
    $servername = 'localhost';
    $db_name = 'db1_gwalke01;';
    $username = 'root';
    $password = '';

    $sql = "INSERT INTO test (name,email,phone_number) ";
    $sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

    // Connect to server and select database

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if(mysqli_connect_errno())
    {
        echo "Did not manage to connect to MYQSL: " . mysqli_connect_errno();
    }

    // Execute sql statement
    $result = mysqli_query($connect,$sql);

    if($result)
    {
        echo"The record has been changed.<br/>";
    }
    else
    {
        echo"There was an error: " . mysqli_error($connect);
    }

    $sql = "SELECT * from test";

    // Execute sql statement
    $result = mysqli_query($connect,$sql);

    if($result)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "$row[name]  $row[email]  $row[phone_number] <br/>";
        }
    }
    else
    {
        echo "Error when fetching the data.";
    }
?>
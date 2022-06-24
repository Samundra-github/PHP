<?php  

    // Ways to connect MySql Datatbase

    // MySQLi extention
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";

    // connection object
    $conn = mysqli_connect($servername, $username, $password);
    // Establishing Connection
    if (! $conn) {
        die ("Sorry connection was not successful.". mysqli_connect_error());
    } else {
        echo "Connection was Successful.";
    }

    // Creating Database using PHP
    $create_query = "Create Database PHPlearn";
        
    try {
        $result = mysqli_query($conn, $create_query);
    } catch (Throwable $e) {
        echo "<br>Sorry can't create table. " . mysqli_error($conn);
    }


?>  
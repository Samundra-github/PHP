<?php  

    // Establishing Connection to DataBase
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";

    $db = "learnphp";

    // connection object
    $conn = @mysqli_connect($servername, $username, $password, $db);
    // Response
    if (! $conn) {
        die ("Sorry connection was not successful.". mysqli_connect_error());
    } else {
        echo "Connection was Successful. <br>";
    }

    // Create a MySQL table Using PHP
    $create_query = "CREATE TABLE `firsttable` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `address` VARCHAR(100) NOT NULL , `contact` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`))";

    try {
        $result = mysqli_query($conn, $create_query);
    } catch (Throwable $e) {
        echo "<br>Sorry can't create table. " . mysqli_error($conn);
    }
    mysqli_close($conn);


?>  
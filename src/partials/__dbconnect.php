<?php
// pharmacytest
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tourism";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: \n" . $conn->connect_error);
    }
    else{
         echo "Connected successfully.....\n";
   }
?>


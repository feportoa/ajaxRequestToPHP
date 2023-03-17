<?php
    ini_set('display_errors', 1);

    $hostname = "127.0.0.1";
    $username = "12345";
    $password = "12345";
    $database = "ajaxTeste";

    $conn = new mysqli("$hostname", "$username", "$password", "$database");

    if(!$conn){
        die("Error trying to connect: " . mysqli_errno($conn));
    }
?>
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "web_mysqli";

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error){
        echo("Khong ket noi duoc");
    }
?>
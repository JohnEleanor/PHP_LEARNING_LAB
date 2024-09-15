<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

    try {
        // สร้างการเชื่อมต่อ
        $conn = new mysqli($servername, $username, $password, $dbname);
    } catch (\Throwable $th) {
        die("Connection failed: " . $conn->connect_error);
    }


?>
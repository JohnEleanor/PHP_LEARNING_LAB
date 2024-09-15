<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ecommerce";
global $servername, $username, $password, $dbname;

// //$conn = new mysqli($servername, $username, $password, $dbname);

// // Suppress warnings using the @ operator
// global $conn;
// $conn = new mysqli($servername, $username, $password, $dbname);


// if ($conn->connect_error) {
//     // Log the error (optional)
//     error_log("Connection failed: " . $conn->connect_error);
    
//     // Display a user-friendly message
//     die("Error: Unable to connect to the database. Please check your connection and try again later.");
// }

try {
    $conn = new mysqli($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["dbname"]);
    if ($conn) {
        print("[เชื่อมต่อฐานข้อมูลสำเร็จ]<br>");
        global $conn;
    }
    //code...
} catch (Exception $e) {
    print("[เกิดข้อผิดพลาด] " . $e->getMessage());
    //throw $th;
}


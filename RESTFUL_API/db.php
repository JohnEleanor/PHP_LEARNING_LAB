<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db = "employee_management";

    $dns = "mysql:host=$servername;dbname=$db;charset=utf8";

    try {
        $conn = new PDO($dns, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        // print("Connect Success");
    } catch (PDOException $e) {
        print ("[Error] เกิดข้อผิดพลาด " . $e->getMessage());
    }


?>

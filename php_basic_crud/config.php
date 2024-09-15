<?php 
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "ecommerce";

    try {
        $conn = new mysqli($host, $user, $pass, $db);
        // print("[สำเร็จ] ติดต่อฐานข้อมูลสำเร็จ");
    } catch (Exception $e) {
        print("<br>[ผิดพลาด] ติดต่อฐานข้อมูลไม่สำเร็จ" . $e->getMessage());
    }

?>

<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ecommerce";

    try {
        $conn = new mysqli($server, $username, $password, $database);
        // print("[สำเร็จ] ติดต่อฐานข้อมูลสำเร็จ");
    } catch (Exception $e) {
        print("<br>[ผิดพลาด] ติดต่อฐานข้อมูลไม่สำเร็จ" . $e->getMessage());
    }

?>

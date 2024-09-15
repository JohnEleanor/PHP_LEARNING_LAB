<?php 
// สร้างตัวแปรเก็บค่าการเชื่อมต่อฐานข้อมูล
    $url = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud";
    
    // ทำการเชื่อมต่อฐานข้อมูล
    try {
        // กรณีใช้ PDO
        $conn = new PDO("mysql:host=$url;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print("เชื่อมต่อฐานข้อมูลสำเร็จ");
    } catch (PDOException $e) {
        // กรณีเกิดข้อผิดพลาด
        print ("ไม่สามารถเชื่อมต่อกับ Databse ได้ : " . $e->getMessage());
    }

   
   
?> 

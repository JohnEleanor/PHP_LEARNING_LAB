<?php 

    $url = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud1";


    try {
        //code...
        $conn = new mysqli($url, $username, $password, $dbname);
        print("เชื่อมต่อฐานข้อมูลสำเร็จ");
    } catch (Exception $error) {
        //throw $th;
        print("<pre>");
        print_r($error);
        print("</pre>");
        
        print("ไม่สามารถเชื่อมต่อกับ Database ได้ : " . $error->getMessage());
    }

   
    
?>
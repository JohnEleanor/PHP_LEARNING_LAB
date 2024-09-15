<?php require 'Config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // สร้างตัวเเปรเก็บ คำสั่งในการ สร้างตาราง
    $sql = "CREATE TABLE IF NOT EXISTS `users`(
        `id` int(11) AUTO_INCREMENT PRIMARY KEY,
        `username` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL
    )";
    
    try {
        // ทำการ query สร้างตาราง
        $res = $conn->query($sql);
        if ($res === TRUE) echo " <br> [สำเร็จ] สร้างตารางสำเร็จ";
    } catch (Exception $e) {
        print("สร้างตารางไม่สำเร็จ : " . $e->getMessage());
    }

    // สร้างคำสั่งเพิ่มข้อมูล
    $sql = "INSERT INTO users (username, email) VALUES ('John Doe', 'john@example.com')";

    try {
        // ทำการ query เพิ่มข้อมูล
        $res = $conn->query($sql);
        if ($res === TRUE) echo " <br> [สำเร็จ] เพิ่มข้อมูลสำเร็จ";
    } catch (Exception $e) {
        print("[ผิดพลาด] การเพิ่มข้อมูลผิดพลาด : " . $e->getMessage());
    }
    echo "<br>";

    // สร้างคำสั่งเลือกข้อมูล
    $sql = "SELECT * FROM users";
    try {
        // ทำการ query เลือกข้อมูล
        $result = $conn->query($sql);
        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if ($result->num_rows > 0) {
            // วนลูปแสดงข้อมูล
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"] . " - Name: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
            }
        } else {
            echo "[ผิดพลาด] ไม่พบข้อมูล";
        }
    } catch (Exception $e) {
        // กรณีเกิดข้อผิดพลาด
        print("[ผิดพลาด] การเลือกข้อมูลผิดพลาด : " . $e->getMessage());
    }

    ?>
</body>

</html>
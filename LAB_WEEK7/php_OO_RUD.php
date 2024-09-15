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

    // Function ให้เลือกดูข้อมูล
    function selectUsers($conn)
    {
        $sql = "SELECT * FROM users";
        try {
            $result = $conn->query($sql);
            // ถ้ามีข้อมูล หรือ มากกว่า 0
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // แสดงข้อมูล
                    echo "<li>ID: " . $row["id"] .
                        " - Name: " . $row["username"] .   // Corrected column name from "name" to "username"
                        " - Email: " . $row["email"] .
                        " - Age: " . $row["age"] .
                        " - Tel: " . $row["tel"] . "</li><br>";
                }
            } else {
                echo "ไม่พบข้อมูล";
            }
        } catch (Exception $e) {
            // กรณีเกิดข้อผิดพลาด
            print("[ผิดพลาด] การเลือกข้อมูลผิดพลาด : " . $e->getMessage());
        }
        echo "<br>";
    }

    // เเสดงข้อมูล
    selectUsers($conn);

  
    $sql = "UPDATE users SET age = '25', tel = '0912345678' WHERE id = 2";
    try {
        // ทำการ query อัพเดทข้อมูล
        if ($conn->query($sql) === TRUE) {
            $affected_rows = $conn->affected_rows;
            if ($affected_rows > 0) {
                echo "{$affected_rows} record(s) อัพเดทสำเร็จ";   
            } else {
                echo "ไม่มี ข้อมูลการอัพเดท";
            }
        } 
    } catch (Exception $e) {
        // กรณีเกิดข้อผิดพลาด
        echo "[ผิดพลาด] อัพเดตข้อมูลไม่สำรเร็จ: " . $e->getMessage();
    }
    echo "<br>";

    // เเสดงข้อมูล
    selectUsers($conn);

    $sql = "DELETE FROM users WHERE id = 3";
    // ทำการ query ลบข้อมูลเเละถ้าสำเร็จ
    if ($conn->query($sql) === TRUE) {
        $affected_rows = $conn->affected_rows;
        // ถ้ามีข้อมูลถูกลบ
        if ($affected_rows > 0) {
            echo "{$affected_rows} record(s) ลบข้อมูลสำเร็จ";   
        } else {
            echo "ไม่มีข้อมูลการลบ";
        }
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    echo "<br>";

    // เเสดงข้อมูล
    selectUsers($conn);
    // ปิดการเชื่อมต่อ
    $conn->close();

    ?>
</body>

</html>
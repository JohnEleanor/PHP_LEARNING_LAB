<?php
// เรียกใช้ไฟล์ config.inc.php เเละ index.html
    include 'config.inc.php';
    include 'index.html';

    // สร้างคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง categories
    $sql = "SELECT * FROM `categories` WHERE 1;";

    // ประมวลผลคำสั่ง SQL หรือว่า query
    $result = $conn->query($sql);

    echo "<h2>Categories Table</h2>";
    // เช็คว่ามีข้อมูลในตารางหรือไม่
    if($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Category ID</th>";
        echo "<th>Category Name</th>";
        echo "</tr>";
        // Loop แสดงข้อมูลจากตาราง
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['category_id'] . "</td>";
            echo "<td>" . $row['category_name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No categories found.";
    }
?>
<?php
// เรียกใช้ไฟล์ config.inc.php เเละ index.html
    include 'config.inc.php';
    include 'index.html';

    // สร้างคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง customers
    $sql = "SELECT * FROM `customers` WHERE 1;";
    // ประมวลผลคำสั่ง SQL หรือว่า query
    $result = $conn->query($sql);

    echo "<h2>Customers Table</h2>";
    // เช็คว่ามีข้อมูลในตารางหรือไม่
    if($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Customer ID</th>";
        echo "<th>Customer Name</th>";
        echo "<th>Customer Email</th>";
        echo "<th>Customer Address</th>";
        echo "</tr>";
        // Loop แสดงข้อมูลจากตาราง
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['customer_id'] . "</td>";
            echo "<td>" . $row['customer_name'] . "</td>";
            echo "<td>" . $row['customer_email'] . "</td>";
            echo "<td>" . $row['customer_address'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No customers found.";
    }
?>
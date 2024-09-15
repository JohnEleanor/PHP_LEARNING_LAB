<?php
// เรียกใช้ไฟล์ config.inc.php เเละ index.html
    include 'config.inc.php';
    include 'index.html';

    // สร้างคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง orders และ customers
    $sql = "SELECT orders.order_id, orders.order_date, orders.total_amount, customers.customer_name, customers.customer_email FROM orders JOIN customers ON orders.customer_id = customers.customer_id;";
    // ประมวลผลคำสั่ง SQL หรือว่า query
    $result = $conn->query($sql);

    echo "<h2>Orders Table</h2>";
    // เช็คว่ามีข้อมูลในตารางหรือไม่
    if($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Order ID</th>";
        echo "<th>Order Date</th>";
        echo "<th>Total Amount</th>";
        echo "<th>Customer Name</th>";
        echo "<th>Customer Email</th>";
        echo "</tr>";
        // Loop แสดงข้อมูลจากตาราง
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['order_date'] . "</td>";
            echo "<td>" . $row['total_amount'] . "</td>";
            echo "<td>" . $row['customer_name'] . "</td>";
            echo "<td>" . $row['customer_email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No orders found.";
    }
?>
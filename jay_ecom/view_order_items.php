<?php
// เรียกใช้ไฟล์ config.inc.php เเละ index.html
    include 'config.inc.php';
    include 'index.html';

    // สร้างคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง order_items และ producs
    $sql = "SELECT order_items.order_id, order_items.product_id, order_items.quantity, order_items.product_price, producs.product_name FROM order_items JOIN producs ON order_items.product_id = producs.product_id;";
    // ประมวลผลคำสั่ง SQL หรือว่า query
    $result = $conn->query($sql);

    echo "<h2>Order Items Table</h2>";

    // เช็คว่ามีข้อมูลในตารางหรือไม่
    if($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Order ID</th>";
        echo "<th>Product ID</th>";
        echo "<th>Quantity</th>";
        echo "<th>Product Price</th>";
        echo "<th>Product Name</th>";
        echo "</tr>";
        // Loop แสดงข้อมูลจากตาราง
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['product_id'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['product_price'] . "</td>";
            echo "<td>" . $row['product_name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No order items found.";
    }
?>
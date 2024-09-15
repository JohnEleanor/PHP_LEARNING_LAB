<?php
// เรียกใช้ไฟล์ config.inc.php เเละ index.html
    include 'config.inc.php';
    include 'index.html';

    // สร้างคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง orders, customers, order_items และ producs
    $sql = "SELECT orders.order_id, orders.order_date, customers.customer_name, producs.product_name, order_items.quantity, order_items.product_price, (order_items.quantity * order_items.product_price) 
    AS item_total, (SELECT SUM(order_items.quantity * order_items.product_price) FROM order_items WHERE order_items.order_id = orders.order_id) AS total_amount FROM orders JOIN customers 
    on orders.customer_id = customers.customer_id JOIN order_items ON orders.order_id = order_items.order_id JOIN producs on order_items.product_id = producs.product_id ORDER BY orders.order_id, 
    producs.product_name;";
    $result = $conn->query($sql);

// เช็คว่ามีข้อมูลในตารางหรือไม่
    echo "<h2>Orders Table</h2>";
    if($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Order ID</th>";
        echo "<th>Order Date</th>";
        echo "<th>Customer Name</th>";
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Product Price</th>";
        echo "<th>Item Total</th>";
        echo "<th>Total Amount</th>";
        echo "</tr>";
        // Loop แสดงข้อมูลจากตาราง
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['order_date'] . "</td>";
            echo "<td>" . $row['customer_name'] . "</td>";
            echo "<td>" . $row['product_name'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['product_price'] . "</td>";
            echo "<td>" . $row['item_total'] . "</td>";
            echo "<td>" . $row['total_amount'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No orders found.";
    }

?>
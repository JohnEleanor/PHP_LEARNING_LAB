<?php
// เรียกใช้ไฟล์ config.inc.php เเละ index.html
    include 'config.inc.php';
    include 'index.html';

    // สร้างคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง producs และ categories
    $sql = "SELECT producs.product_id, producs.product_name, producs.description, producs.price, 
        producs.quantity, categories.category_name FROM producs JOIN categories 
        ON producs.category_id = categories.category_id;";
    // ประมวลผลคำสั่ง SQL หรือว่า query
    $result = $conn->query($sql);
    echo "<h2>Products Table</h2>";
    // เช็คว่ามีข้อมูลในตารางหรือไม่
    if($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Product ID</th>";
        echo "<th>Product Name</th>";
        echo "<th>Description</th>";
        echo "<th>Price</th>";
        echo "<th>Quantity</th>";
        echo "<th>Category</th>";
        echo "</tr>";
        // Loop แสดงข้อมูลจากตาราง
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['product_id'] . "</td>";
            echo "<td>" . $row['product_name'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['category_name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No products found.";
    }

    $conn->close();
?>
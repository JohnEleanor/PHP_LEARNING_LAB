<?php
        session_start();

        require("Config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Product</title>
</head>

<body>
<?php 
if ($_SESSION["isLogin"] == true) {

    print("
     <script>
        Swal.fire({
            title: 'ยินดีต้อนรับ',
            text: 'เข้าสู่ระบบสำเร็จ',
            icon: 'success'
        })
    </script>");
    $_SESSION["isLogin"] = false;

}
?>
    <?php require("nav.php"); ?>
    <div class="container w-50">

       <?php

        $sql = "SELECT p.product_id, p.product_name, p.description, p.price, p.quantity, c.category_name 
        FROM products p
        JOIN categories c ON p.category_id = c.category_id";


        $result = $conn->query($sql);

        echo "<center><h2>ตารางข้อมูลสินค้า</h2></center>";

        if ($result->num_rows > 0) {

            print("<table class='table'>
                <thread>
                    <tr>
                        <th scope='col'>Product ID</th>
                        <th scope='col'>Product Name</th>
                        <th scope='col'>Description</th>
                        <th scope='col'>Price</th>
                        <th scope='col'>Quantity</th>
                        <th scope='col'>Category</th>
                        ");
                        if ($_SESSION["role"] == "admin") {
                            print("<th scope='col'></th>");
                        } else {
                            print("<th scope='col'></th>");
                        }
                        print("
                    </tr>
                </thread>
            ");
            while ($row = $result->fetch_assoc()) {
                print("
                    <tbody>
                        <tr>
                            <td>" . $row["product_id"] . "</td>
                            <td>" . $row["product_name"] . "</td>
                            <td>" . $row["description"] . "</td>
                            <td>" . $row["price"] . "</td>
                            <td>" . $row["quantity"] . "</td>
                            <td>" . $row["category_name"] . "</td>
                    ");
                    if ($_SESSION["role"] == "admin") {
                    print("
                        <td> <button type='button' class='btn btn-success m-1'>ดู</button> <button type='button' class='btn btn-primary m-1'>เเก้ไข</button> <button type='button' class='btn btn-danger'>ลบ</button>  </td>
                    ");
                    }else {
                        print("
                        <td><button type='button' class='btn btn-success m-1'>สั่งซื้อ</button> </td>
                        ");
                    }
                print("
                        </tr>
                    </tbody>
                ");
            }
        } else {
            echo "No products found.";
        }

        $conn->close();
        ?>
    </div>


</body>

</html>
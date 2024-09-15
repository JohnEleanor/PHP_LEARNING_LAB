<?php
session_start();
// print("Session ID : " . session_id());
// print("<pre>");
// print("Session : ");
// print_r($_SESSION['cart']);
// print("Post : ");
// print_r($_POST);
// print("</pre>");

$products = [
    ['id' => 0, 'name' => 'เสื้อเเขนทสั้น', 'price' => 100, 'image' => 'https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg'],
    ['id' => 1, 'name' => 'กระเป๋า', 'price' => 200, 'image' => 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg'],
    ['id' => 2, 'name' => 'เสื้อกั๊ก', 'price' => 300, 'image' => 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg'],
    ['id' => 3, 'name' => 'เสื้อเเขนยาว', 'price' => 400, 'image' => 'https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg'],
    ['id' => 4, 'name' => 'กำไล', 'price' => 500, 'image' => 'https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg']
];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mitr:wght@200;300;400;500;600;700&display=swap');

        * {
            font-family: 'Kanit', sans-serif;
        }

        .conatiner {
            display: flex;
            justify-content: center;
        }

        .product {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
            text-align: center;
        }

        img {
            width: 200px;
            height: 200px;
        }



        .detail-container {
            margin: 0.3rem;
        }

        .cart-img img {
            padding: 0.8rem;
            width: 100px;
            height: 100px;
        }

        td {
            text-align: center;
            padding: 0.5rem;
            width: 10rem;
        }
    </style>
</head>


<body>
    <center>
        <h1>
            รายการสินค้า
        </h1>
    </center>
    <div class="conatiner">
        <!-- ขึ้นโครงโดยใช้ html จัฟ
     <div class="product">
            <img src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg" alt="">
            <h2>สินค้า 1</h2>
            <p>ราคา: ฿100</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="product_id" value="1">
                <input type="submit" value="สั่งซื้อ">
            </form>
        </div> -->
        <?php

        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
            echo '<h2>' . $product['name'] . '</h2>';
            echo '<p>ราคา: ฿' . number_format($product['price'], 2) . '</p>';
            echo '<form action="jay_cart_backend.php" method="post">';
            echo '<input type="hidden" name="product_id" value="' . $product['id'] . '">';
            echo '<input type="submit" name="add_product" value="Add Order">';
            echo '</form>';
            echo '</div>';
        }
        ?>

    </div>

    <center>
        <div class="container-cart">
            <div class="cart">
                <h1>ตะกร้าสินค้า</h1>
                <form action="jay_cart_backend.php" method="post">
                    <table border="1">
                        <th>อันดับ</th>
                        <th>ชื่อสินค้า</th>
                        <th>ราคา</th>
                        <th>รูปสินค้า</th>
                        <th>เพิ่มเติม</th>
                        <?php
                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                            $i = 0;
                            foreach ($_SESSION['cart'] as $cart_product_id) {
                                // print($cart_product_id);
                                // print_r("Item list : ".$cart_product_id."<br>");
                                // print_r($products[$cart_product_id]['name']);
 
                                echo "
                                <tr>
                                    <td>".intval($i+1)."</td> <!--เเปลงเป็น int เเล้ว +1 -->
                                    <td>
                                        {$products[$cart_product_id]['name']}
                                    </td>
                                    <td>{$products[$cart_product_id]['price']}</td>
                                    <td>
                                        <div class='cart-img'>
                                            <img src='{$products[$cart_product_id]['image']}' >
                                        </div>
                                    </td>
                                    <td>
                                        <div class='detail-container'>
                                            <input type=submit name=delete_id value='ลบ'/>
                                            <input type=hidden name=delete_product_id value='$i'/>
                                        </div>
                                    </td>
                                </tr>";
                                $i++;
                            }
                        } else {
                            echo 'ไม่มีสินค้าในตะกร้า';
                            echo '<tr>
                            <td>ไม่มีสินค้าในตะกร้า</td>
                            <td>ไม่มีสินค้าในตะกร้า</td>
                            <td>ไม่มีสินค้าในตะกร้า</td>
                            <td>ไม่มีสินค้าในตะกร้า</td>
                            <td>ไม่มีสินค้าในตะกร้า</td>';
                        }

                        ?>

                        <!-- ขึ้นโครงโดยใช้ html จัฟ
                   <tr>
                        <td>
                            สินค้า 1
                        </td>
                        <td>123</td>
                        <td>
                            <div class="cart-img">
                                <img src="https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg" >
                            </div>
                        </td>
                        <td>
                            <div class="detail-container">
                                <button>แก้ไข</button>
                                <button>ลบ</button>
                            </div>
                        </td>
                    </tr> -->



                    </table>
                </form>
                <form action="jay_cart_backend.php" method="post">
                    <input type="submit" value="ลบทั้งหมด" name="clear_session">
                </form>



            </div>
        </div>
    </center>







</body>

</html>
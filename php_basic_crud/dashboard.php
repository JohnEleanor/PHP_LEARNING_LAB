<?php 
session_start();
require('config.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
<?php 
if (!isset($_COOKIE['isLogin'])) {
    print("กรุณาเข้าสู่ระบบก่อน :3 ");
    header('refresh:2 url=index.php');
} else{ ?>
    <nav>
        <a href="logout.php">ออกจากระบบ</a>
    </nav>
    
    <center><h1>ยินดีต้อนรับ</h1></center>
    <center>
       
    <form action="crud.php" method="post">
        <table border="1">
        <th colspan=6">รายการสินค้า</th>
            <tr>
                <th>ชื่อสินค้า</th>
                <th>ราคา</th>
                <?php if ($_SESSION['role'] == 'admin') { ?>
                    <th>รูป</th>
                    <th colspan="5"></th>
                <?php } else { ?>
                    <th colspan="5">รูป</th>
                <?php } ?>
    
            </tr>
        
            <?php $i=0; while ($products = $result->fetch_assoc()) { ?>
                <?php $i = $i + 1; ?>
                <tr>
                    <td><?php print($products['product_name']);?></td>
                    <td><?php print($products['price']);?></td>
                    <td><img src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg" width="100" height="100"></td>
                    <?php if ($_SESSION['role'] == 'admin') { ?>
                        <td><button type="submit" name="see" value=<?php print($i);?>>ดู</button></td>
                        <td><button type="submit" name="edit" value=<?php print($i);?>>เเก้ไข</button></td>
                        <td><button type="submit" name="delete" value=<?php print($i);?>>ลบ</button></td>
                    <?php } else { ?>
                        <td colspan="4"><button style="bg-color:green;" "submit" name="buy" value=<?php print($i);?>>สั่งศื้อ</td>
                    <?php  } ?>

                </tr>
            <?php } ?>

               
    
        </table>
    </form>
    </center>





    <!-- <?php ($_SESSION['role'] == 'admin' ? print("<script>window.alert('สวัสดีคุณคือ Admin');</script>") : print("<script>window.alert('สวัสดี');</script>"))  ?> -->
    
<?php } ?>
</body>
</html>
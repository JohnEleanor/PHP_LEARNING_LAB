<?php session_start(); ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <h1>Add Data</h1>
    <?php 
        if (isset($_POST['add_value'])) {
            if (isset($_SESSION['arrData'])) {
                $value = $_POST['add_value'];
                array_push($_SESSION['arrData'], $value);
                header("location: showdetail.php");
            } else {
                echo "<h1>Session ไม่มีอยู่จริงคัฟฟฟฟฟ ไป init Session ก่อนน้า</h1> <br>";
            }

        }else {
            echo "Action is not found <br>";
        }
    ?>
    
    <strong>กดตรงนี้ <a href="showdetail.php">Show Detail</a></strong>
    </pre>
</body>
</html>
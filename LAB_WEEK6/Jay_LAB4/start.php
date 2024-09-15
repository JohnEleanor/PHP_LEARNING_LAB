<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    ob_start();
    $_SESSION["data"] = "Hello Nopphagaew T.";
    $_SESSION['arrData'] = array('Anny', 'TongChai', 'Jane');
    echo "Session Start success<br>";
    echo "<b>{$_SESSION['data']}</b><br>";
    ?>
    <a href="showdetail.php">show detail</a>
</body>

</html>
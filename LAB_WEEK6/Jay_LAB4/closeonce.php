<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    ob_start();
    session_start();
    print(session_id() . "<br>");
    ob_start();
    unset($_SESSION['arrData']);
    header("Location:showdetail.php");
    ?>
</body>

</html>
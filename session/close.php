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
    $_SESSION['simpleTest'] = "Hello World";
    session_destroy();
    header("Location: showdetail.php");
    // Add New eiei

    ?>
</body>

</html>
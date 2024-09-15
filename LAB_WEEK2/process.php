<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") { 
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    if (isset($_POST['name_post'])) { 
        $name = $_POST['name_post'];

        if (!empty($_POST['name_post'])) {
            echo "Hello $name";
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    // print_r($_GET);
    if (isset($_GET['name_get'])) {     
        $name = $_GET['name_get'];
        if (!empty($_GET['name_get'])) {
            echo "Hello $name";
        }
    }
}
?>
</body>
</html>
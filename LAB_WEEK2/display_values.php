<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST)) {
        if (!empty($_POST['name']) and !empty($_POST['password'])) {
            $username = $_POST['name'];
            $password = $_POST['password'];
        
            echo "Hello $username, $password";
            echo '<script>Swal.fire({
                    title: "ยินดีต้อนรับคุณ : '.$username.'",
                    text: "Password ของคุณคือ : '.$password.'",
                    icon: "success"
                });</script>';
        }
       
    }
    }
   
?>


</body>
</html>
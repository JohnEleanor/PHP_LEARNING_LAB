<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>

    <form action="check_login.php" method="post">

        ผู้ใช้ : <br><input type="text" name="username"><br>
        รหัสผ่าน : <br><input type="password" name="password"><br>
        <br><input type="submit" value="เข้าสู่ระบบ">
    </form>
    <a href="page_register.php"><button>สมัคร</button></a>
</body>

</html>
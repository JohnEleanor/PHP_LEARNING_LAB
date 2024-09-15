<?php 
    require('config.php');
    session_start();

    // Register 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = htmlspecialchars($_POST['username']);
        $password = $_POST['password'];
        $email = $_POST['email'];

        // $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (username, password, role) VALUES ('$username', '$password', 'user')";
        // print("<br>");
        // print($sql);

        $res = $conn->query($sql);
        if (!$res) {
            print("Register Fail");
        }else {
            print("Register Success");
            // header('Location: index.php'); // Redirect ไปที่ หน้า index ทันที
        }
    }else {
        print("Method Not Allow");
        // header('Location: index.php'); // Redirect ไปที่ หน้า index ทันที   
        // header('refresh:2 url=index.php'); // Redirect ไปที่ หน้า index เเบบ รอ 2 วินาที
    }
?>
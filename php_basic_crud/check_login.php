<?php 

    require('config.php');
    session_start();

    // Login
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = htmlspecialchars($_POST['username']);
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $res = $conn->query($sql);


        if ($res->num_rows > 0){
            $row = $res->fetch_assoc();
            if ($row) {
                print("เข้าสู่ระบบสำเร็จ");
                $_SESSION['user'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                // เก็บค่า cookie ไว้ 30 วันเช็ต สำหรับ การ Login 
                setcookie('isLogin', true, time() + 3600 * 24 * 30 ); 

                header('Location: dashboard.php');
            }
        }else {
            print("ไม่เจอผู้ใช้งานนี้ในระบบ");
            header('Location: index.php');
        }

    }else {
        print("Method Not Allow");
    }

?>
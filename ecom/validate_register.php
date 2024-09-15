<?php 
require("Config.php");
session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print(empty($_POST["username"]) ? "Empty" : "Not Empty");
        print(empty($_POST["password"]) ? "Empty" : "Not Empty");

        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $_SESSION["invalid"] = "กรุณากรอกข้อมูลให้ครบถ้วน";
            header("Location: register.php");
        } else {

            $sql = "INSERT INTO user (username, password, role) VALUES ('".$_POST["username"]."', '".$_POST["password"]."', 'user')";
            print("<br>");
            print($sql);
            $result = $conn->query($sql);

            if ($result) {
                print("สมัครสมาชิกสำเร็จ");
                $_SESSION["register_success"] = "สมัครสมาชิกสำเร็จ";    
                // header("Location: login.php");
            } else {
                print("สมัครสมาชิกไม่สำเร็จ");
            }
        }
    }
?>
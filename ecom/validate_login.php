<?php 

require("Config.php");  
session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
   
            $sql = "SELECT * FROM user WHERE username = '".$_POST["username"]."' AND password = '".$_POST["password"]."'";
            print($sql);
            $result = $conn->query($sql); 
            if ( $result->num_rows > 0 ) {
                $password = $_POST["password"];
                $row = $result->fetch_assoc();
             
                if ($result->num_rows > 0) {
                    print("เข้าสู่ระบบสำเร็จ");
                    $_SESSION["username"] = $row["username"]; 
                    // $_SESSION["password"] = $row["password"];
                    $_SESSION["role"] = $row["role"];
                    $_SESSION["isLogin"] = true;
                    header("Location: view_product_categories.php");   
                } else {
                    print("รหัสผ่านไม่ถูกต้อง");
                }
               
                // sleep(1);
                
                
        } else {
                print("ไม่เจอข้อมูลผู้ใช้");
                $_SESSION["nofound"] = "ไม่พบข้อมูลผู้ใช้";
                header("Location: login.php");   
            }

    } else {
            $_SESSION["invalid"] = "กรุณากรอกข้อมูลให้ครบถ้วน";
            header("Location: login.php");  
    }

    }
?>
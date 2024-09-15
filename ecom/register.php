<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Register</title>
</head>

<body>
    <?php



        require("Config.php");
        session_start();
     
        print("<pre>");
        print_r($_SESSION);
        print("</pre>");

        // DEBUG 
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        unset($_SESSION["role"]);
        print(empty($_SESSION["user_Nofound"]) ? "Empty" : "Not Empty");
        unset($_SESSION["isLogin"]);


        if (isset($_SESSION["invalid"])) {
            print("<script>Swal.fire({
            title:'เกิดข้อผิดพลาด',
            text:'กรุณากรอกข้อมูลให้ครบถ้วน',
            icon: 'error'})
            </script>");
            unset($_SESSION["invalid"]);
        } elseif (isset($_SESSION["nofound"])) {
            // print("ไม่พบข้อมูลผู้ใช้");
            print("<script>Swal.fire({
                title:'เกิดข้อผิดพลาด',
                text:'ไม่พบข้อมูลผู้ใช้',
                icon: 'error'})
            </script>");
            unset($_SESSION["nofound"]);
        }
      
    ?>
    <div class="container w-25">
        <div class="mt-5">
            <h1>สมัครสมาชิก</h1>
        </div>
        <form action="validate_register.php" method="post">
            <div class="mb-3">
                <label class="form-label">ผู้ใช้</label>
                <input type="text" class="form-control" name="username" >
            </div>
            <div class="mb-3">
                <label class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password" >
            </div>
            <div class="mb-3">
                 <a href="Login.php">เข้าสู่ระบบ</a>
            </div>
            <button type="submit" class="btn btn-success">สมัครสมาชิก</button>
        </form>
    </div>


  

</body>

</html>
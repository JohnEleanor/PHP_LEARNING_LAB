<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>
    <?php


        require("Config.php");
        session_start();

        // DEBUG 
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        unset($_SESSION["role"]);
        print(empty($_SESSION["user_Nofound"]) ? "Empty" : "Not Empty");

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
        } elseif (isset($_SESSION["register_success"])) {
            print("<script>Swal.fire({
                title:'สมัครสมาชิกสำเร็จ',
                text:'สมัครสมาชิกสำเร็จ',
                icon: 'success'})
            </script>");
            unset($_SESSION["register_success"]);
        }
      
    ?>
    <div class="container w-25">
        <div class="mt-5">
                <h1>เข้าสู่ระบบ</h1>
            </div>
        <form action="validate_login.php" method="post">
            <div class="mb-3">
                <label class="form-label">ผู้ใช้</label>
                <input type="text" class="form-control" name="username" >
            </div>
            <div class="mb-3">
                <label class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password" >
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">ยืนยัน</label>
                <a href="register.php">สมัครสมาชิก</a>
            </div>
            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
        </form>
    </div>


  

</body>

</html>
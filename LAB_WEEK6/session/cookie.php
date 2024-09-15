<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<pre>
    <?php 
        // เริ่มต้นค่าต่างๆ
        $username = '';
        $data_log = [];

        // รับข้อมูลจากฟอร์ม
        if (isset($_POST['username'])) {
            $username = $_POST['username'];

            // ตรวจสอบและอัปเดตค่าการเข้าใช้งาน
            if (isset($_COOKIE['username']) && $username == $_COOKIE['username']) {
                $cookie_count_time = isset($_COOKIE['cookie_count_time']) ? $_COOKIE['cookie_count_time'] + 1 : 1;
            } else {
                $cookie_count_time = 1; // ตั้งค่าเริ่มต้นที่ 1
            }
            
            // สร้างข้อมูลใหม่
            $data_log[] = [
                'username' => $username,
                'visitTime' => date('Y-m-d H:i:s'),
                'cookie_count_time' => $cookie_count_time
            ];

            // อัปเดตค่าของ Cookie
            setcookie('username', $username, time() + 3600);
            setcookie('cookie_count_time', $cookie_count_time, time() + 3600);
            setcookie('data_log', json_encode($data_log), time() + 3600);

            // แสดงผล Cookie
            print_r($_COOKIE);
        } else {
            // อ่านค่าจาก Cookie
            if (isset($_COOKIE['data_log'])) {
                $data_log = json_decode($_COOKIE['data_log'], true);
            }
        }
    ?>
</pre>

    <center>
        <h1>เวลาปัจจุบัน: <?php echo date('Y-m-d H:i:s'); ?></h1>

        <!-- ฟอร์มสำหรับรับชื่อผู้ใช้ -->
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <button type="submit">Submit</button>
        </form>
    </center>

    <hr>

    <center>
        <table border="1" style="width: 50%;">
            <h1>รายการประวัติการเข้าใช้งาน</h1>
            <tr>
                <th>ผู้เข้าใช้งาน</th>
                <th>เวลาที่เข้าใช้งาน</th>
                <th>จำนวนครั้ง</th>
            </tr>
            <?php
            // แสดงข้อมูลการเข้าใช้งาน
            foreach ($data_log as $log) {
                echo "<tr>
                    <td>{$log['username']}</td>
                    <td>{$log['visitTime']}</td>
                    <td>{$log['cookie_count_time']}</td>
                </tr>";
            }
            ?>
        </table>
    </center>
</body>

</html>

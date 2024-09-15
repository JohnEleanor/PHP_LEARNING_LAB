<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Update Website</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .time {
            font-size: 100px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .stats {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>This is Time update website for Work1 Assignment</h1>
    <div class="time">
        <?php
        echo date("h:i:sa");
        ?>
    </div>
    <div class="stats">
        <?php
        // ตรวจสอบว่ามี Cookie 'visits' อยู่หรือไม่
        if(isset($_COOKIE['visits'])) {
            $visits = $_COOKIE['visits'] + 1;
        } else {
            $visits = 1; // ถ้าไม่มี Cookie นี้แสดงว่าผู้ใช้งานครั้งแรก
        }

        // เก็บค่า 'visits' ลงใน Cookie
        setcookie('visits', $visits, time() + 3600); // อายุของ Cookie 1 ชม

        // แสดงผลจำนวนครั้งที่เข้าชม
        echo "จำนวนครั้งที่คุณเข้าชม: " . $visits . "<br>";

        // ตรวจสอบว่ามี Cookie 'lastVisit' อยู่หรือไม่
        if(isset($_COOKIE['lastVisit'])) {
            $lastVisit = $_COOKIE['lastVisit'];
            echo "เข้าชมครั้งล่าสุด: " . $lastVisit . "<br>";
        } else {
            echo "นี่คือการเข้าชมครั้งแรกของคุณ!<br>";
        }

        // เก็บค่าเวลาปัจจุบันลงใน Cookie 'lastVisit'
        setcookie('lastVisit', date("h:i:sa d/m/Y"), time() + 3600 * 24 * 365);
        ?>
    </div>
</body>
</html>



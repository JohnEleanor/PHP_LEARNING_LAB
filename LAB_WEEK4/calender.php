<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $month = date('m'); // รับหมายเลขเดือนปัจจุบัน (01-12)
        $year = date('Y'); // รับปีปัจจุบัน (เช่น 2024)
        
        $first_day = mktime(0,0,0,$month,1,$year); // เวลาของวันแรกของเดือนปัจจุบัน
        $last_day = mktime(0,0,0,$month+1,0,$year); // เวลาของวันสุดท้ายของเดือนปัจจุบัน
        
        $startDay = date('w', $first_day); // วันแรกของเดือนเป็นวันในสัปดาห์ (0-6) เช่น 0 = อาทิตย์
        $totalDay = date('t', $first_day); // จำนวนวันทั้งหมดในเดือน
        $month = date('F', $first_day); // ชื่อเดือนปัจจุบัน เช่น "July"
        print("<h2>$month $year</h2>"); // แสดงชื่อเดือนและปี
        
        $daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']; // ชื่อวันในสัปดาห์
        print("<table border='1'>"); // เริ่มสร้างตาราง
        foreach($daysOfWeek as $day){
            print("<th>$day</th>"); // แสดงชื่อวันในสัปดาห์เป็นหัวข้อของตาราง
        }
        print("<tr>"); // เริ่มแถวของวันในสัปดาห์
        
        $currentDay = 1; // เริ่มต้นที่วันแรกของเดือน
        print("<tr>"); // เริ่มแถวของวันที่ในเดือน
        
        // แสดงเซลล์ว่างก่อนวันที่แรกของเดือน
        for($i = 0; $i < $startDay; $i++){
            print("<td></td>");
        }
        
        while ($currentDay <= $totalDay) {
            // ทำเครื่องหมายวันที่วันนี้ด้วยสีแดง
            if ($currentDay == date('d')) {
                print("<td style='background-color: red;'>$currentDay</td>");
            }else {
                print("<td>$currentDay</td>");
            }
        
            // เปลี่ยนแถวเมื่อครบ 7 วัน
            if ((($currentDay + $startDay) % 7) == 0) {
                print("</tr><tr>");
            }
        
            $currentDay++;
        }
        
        // เติมช่องว่างหลังวันที่สุดท้ายของเดือน
        if (($currentDay + $startDay) % 7 != 0) {
            $reminingDays = 7 - (($currentDay + $startDay) % 7);
            for ($i = 0; $i <= $reminingDays; $i++) {
                print("<td></td>");
            }
        }
        
    ?>
</body>
</html>
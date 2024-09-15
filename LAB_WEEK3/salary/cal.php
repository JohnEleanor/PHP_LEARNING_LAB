<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punnavit Chueason</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr {
            background-color: rgb(255, 255, 255);

        }
    </style>
</head>

<body>
    <center>
        <table border="1">
            <tr>
                <th colspan="7">
                    <center>โปรเเกรมคำนวนเงินเดือน</center>
                </th>
            </tr>
            <tr>
                <th>ขั้นที่</th>
                <th>ชั่วโมง</th>
                <th>เงิน</th>
            </tr>

            <?php
            // สร้าง class ชื่อ salary
            // สร้าง ตัว ชื่อ name, hour, salary
            class salary
            {
                public $name;
                public $hour;
                public $salary;

                public function getName()
                {
                    return $this->name;
                }
                public function getHour()
                {
                    return $this->hour;
                }
                public function getSalary()
                {
                    return $this->salary;
                }
               
                public function setName($name)
                {
                    $this->name = $name;
                }
                public function setHour($hour)
                {
                    $this->hour = $hour;
                }

                public function calculateSalary($name, $hour)
                {
                    // ถ้าทำงานไม่เกิน 10 ชั่วโมง ได้ ชั่วโมงละ 100 บาท
                    // ถ้าทำงานมากกว่า 10 ชั่วโมงเเต่ไม่เกิน 20 ชั่วโมง ได้ ชั่วโมงละ 200 บาท
                    //  ถ้าทำงานมากกว่า 20 ชั่วโมงเเต่ไม่เกิน 24 ชั่วโมง ได้ ชั่วโมงละ 300 บาท
                    //  ถ้าทำงานมากกว่า 24 ชั่วโมง เเสดงข้อความ "Work Overtime error "

                    if ($hour <= 24) {
                        if ($hour > 0 && $hour <= 10) {
                            $this->salary = $hour * 100;
                            
                            print("<tr><td>1</td>"."<td>" . $this->hour . "</td>" . "<td>" . ($hour * 100) . "</td>" . "</tr>");
                        } else {
                            $this->salary = 10 * 100;
                            $hour = $hour - 10;
                            
                            print("<tr><td>1</td>" . "<td>10</td>" . "<td>" . (1000) . "</td>" . "</tr>");
                            if ($hour > 0 && $hour <= 10) {
                                $this->salary = $this->salary + ($hour * 200);
                                
                                print("<tr><td>2</td>" . "<td>" . $hour . "</td>" . "<td>" . ($hour * 200) . "</td>" . "</tr>");
                            } else {
                                $this->salary = $this->salary+ (10 * 200);
                                $hour = $hour - 10;
                                print("<tr><td>2</td>" . "<td>10</td>" . "<td>" . (2000) . "</td>" . "</tr>");

                                if ($hour > 0 && $hour <= 4) {
                                    $this->salary = $this->salary + ($hour * 300);
                                    print("<tr><td>3</td>" . "<td>" . $hour . "</td>" . "<td>" . ($hour * 300) . "</td>" . "</tr>");
                                }
                            }
                        }
                        // แสดงผลลัพธ์รวมเงินสุทธิ
                        print('<tr><td colspan="2">รวมเป็นเงินสุทธิ ของ '.$this->name.'</td><td>'.$this->salary.'</td></tr>');
                    }  
                    else {

                        print("<tr><td>Work Overtime Error :(</td></tr>");// แสดงข้อความเมื่อมีการทำงานเกิน 24 ชั่วโมง
                    }
                }

            }

            // การรับค่าและการใช้งาน class salary
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST["name"]) && !empty($_POST["hour"])) {
                    $employee = new salary();
                    $employee->setName($_POST["name"]);
                    $employee->setHour($_POST["hour"]);
                    $employee->calculateSalary($_POST["name"], $_POST["hour"]);
                }
            }
            ?>
        </table>
    </center>
</body>
</html>
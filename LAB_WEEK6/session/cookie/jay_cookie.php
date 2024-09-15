<?php

function setCookieValue($name, $value, $days) {
    $expires = time() + ($days * 24 * 60 * 60);
    setcookie($name, $value, $expires, "/"); 
}

function getCookieValue($name) {
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
}


function updateVisitHistory() {
    $history = getCookieValue('visitHistory');
    // print($history);
    $visitHistory = $history ? json_decode($history, true) : [];

    $visitHistory[] = date('Y-m-d H:i:s');

    setCookieValue('visitHistory', json_encode($visitHistory), 365);

    return $visitHistory;
}


$visitCount = getCookieValue('visitCount');
$lastVisit = getCookieValue('lastVisit');

if ($visitCount === null) {
    $visitCount = 0;
}

$visitCount++;
setCookieValue('visitCount', $visitCount, 365);
setCookieValue('lastVisit', date('Y-m-d H:i:s'), 365);


$visitHistory = updateVisitHistory();


$initialTime = date('H:i:s');
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Time and Visit Statistics</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mitr:wght@200;300;400;500;600;700&display=swap');
        * {
            font-family: 'Kanit', sans-serif;
        }
        #time-display {
            font-size: 3em;
        }
    </style>
</head>
<body>
    <center>
        <div id="container">
            <div id="time-display"><?php echo $initialTime; ?></div>
            <div id="visit-stats">
                <h2>ตารางประวัติการเข้าชม</h2>
            
                    <?php if ($visitHistory): ?>
                        <table border="1">
                            <tr>
                                <th>ประวัติการเข้าชม</th>
                                <th>จำนวนครั้งในการเข้าชม</th>
                            </tr>
                            <?php foreach ($visitHistory as $visitTime): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($visitTime); ?></td>
                                    <td><?php echo 1; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <th>จำนวนครั้งในการเข้าชมทั้งหมด</th>
                                <td><?php echo $visitCount; ?></td>
                            </tr>
                        </table>
                    <?php else: ?>
                        <p>ยังไม่มีประวัติการเข้าชม</p>
                    <?php endif; ?>
            
            </div>
        </div>
    </center>
    <script>
        function updateTime() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            document.getElementById('time-display').textContent = `${hours}:${minutes}:${seconds}`;
        }

        setInterval(updateTime, 1000);

        updateTime();
    </script>
</body>
</html>

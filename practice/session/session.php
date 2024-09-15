<?php 
    session_start();

    $_SESSION['time'] = time();
    // 86400 = 1 day  // 3600 = 1 hour // 60 = 1 minute 
    print("3ชั่วโมง 18 นาที 2 วินาที 22 วินาที <br>");
    setcookie('time', time() + (86400*3) + (3600*18) + (60*2) + (22) ); 
    echo(date("Y-m-d H:i:s" ,time() + (86400*3) + (3600*18) + (60*2) + (22)));

?>
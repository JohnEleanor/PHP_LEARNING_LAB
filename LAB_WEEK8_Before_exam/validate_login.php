<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    
    // Sanitize the input to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    print("Name: $name<br>");

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM user WHERE name = '$name'";
    $result = $conn->query($sql);

    // Check if the name exists or if the name is 'admin'
    if ($result->num_rows > 0) {
        // Start the session
        session_start();
        
        if ($name == 'admin') {
            $_SESSION['user_name'] = 'admin';
            $_SESSION['user_id'] = 0; // Assuming admin does not have an ID in the database
            echo "คือมีข้อมูลในตาราง role admin ";
        } else {
            // Fetch the user ID
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $_SESSION['user_name'] = $name;
            $_SESSION['user_id'] = $id;
            echo "คุณมีข้อมูลในตาราง role user<br>";
        }

        // Redirect to view_login.php after 3 seconds
        // header("refresh:3;url=view_login.php");
        print("LOGIN SUCCESSFUL");
        header("Location: view_login.php");
    } else {
        header("Location: login.html");
        echo "ไม่มีข้อมูล User นี้ในตาราง.";
    }
}

$conn->close();
?>
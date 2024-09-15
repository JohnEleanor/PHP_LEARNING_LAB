<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print("<pre>");
    print_r($_POST);
    // print($_POST['name']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    print("</pre>");
}else {
    print("METHOD NOT ALLOWED");
}

?>
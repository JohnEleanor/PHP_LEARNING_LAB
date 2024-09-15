<?php
session_start();
ob_start();
if (isset($_POST['index']) && isset($_POST['edit_value'])) {
    $index = intval($_POST['index']);
    $edit_value = $_POST['edit_value'];

    if (isset($_SESSION['arrData']) && isset($_SESSION['arrData'][$index])) {
        $_SESSION['arrData'][$index] = $edit_value;
    }
}

header('Location: showdetail.php');

?>

<?php
session_start();
ob_start();
if (isset($_GET['index'])) {
    $index = intval($_GET['index']);

    if (isset($_SESSION['arrData']) && isset($_SESSION['arrData'][$index])) {
        array_splice($_SESSION['arrData'], $index, 1);
    }
}

header('Location: showdetail.php');
?>

<?php
    require_once("curl_helper.php");
    $base = "http://localhost/PHP_LEARNING_LAB/RESTFUL_API/api.php/employees";

    $employees = sendRequest($base, "GET");
    $employees = json_decode($employees, true);

?>

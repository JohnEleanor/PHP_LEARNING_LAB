<?php
session_start();
require("Config.php");
session_destroy();
header("Location: login.php");
?>
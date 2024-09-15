<?php
require('config.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['see'])) {
        print("See : ".$_POST['see']);
    }elseif (isset($_POST['edit'])) {
        print("Edit : ".$_POST['edit']);
    }elseif (isset($_POST['delete'])) {
        print("Delete : ".$_POST['delete']);
    }elseif (isset($_POST['buy'])) {
        print("Buy : ".$_POST['buy']);
    }else {
        print("not found Action ");
    }
}else {
    print("Method Not Allow");
}


?>
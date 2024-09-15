<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Contact list</h1>
    
    <form action="add_data.php" method="post">
        <input type="text" name='add_value' required>
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
    $index = 0;
    echo '<ol>';
    if (isset($_SESSION['arrData'])) {
        foreach ($_SESSION['arrData'] as $val) {
            echo "<li>
            <b>{$val}</b>&nbsp;<button style='background-color: #ff0000;' id=delete_$index onclick='deleteItem($index)'>Delete</button>&nbsp;<button style='background-color: #fcff00;' id='edit_$index' onclick='editItem($index)'>Edit</button>
            </li> <br>";
            $index = $index + 1;
        }

        echo '</ol>';
        echo '<hr>| <a href="start.php">init</a> | <a href="closeonce.php">unset arrData</a> |';
    } else {
        echo 'arrData Not Found</ol><hr>| <a href="start.php">init session</a> |';
    }
    ?>
    
    <a href='close.php'>destroy session</a>

    <form id="editForm" action="edit_data.php" method="post" style="display:none;">
        <input type="hidden" name="index" id="index">
        <input type="hidden" name="edit_value" id="edit_value">
    </form>

    <script>
        function deleteItem(index) {
            window.location.href = 'delete_data.php?index=' + index;
        }

        function editItem(index) {
            let newValue = prompt("Enter the new value : ");
            if (newValue) {
                document.getElementById('editForm').edit_value.value = newValue;
                document.getElementById('editForm').index.value = index;
                document.getElementById('editForm').submit();
            }
        }
    </script>
</body>

</html>

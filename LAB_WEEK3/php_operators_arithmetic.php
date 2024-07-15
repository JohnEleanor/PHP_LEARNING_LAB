<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Section: Arithmetic Operators: +,-,*,/,%
        echo "<h3>Arithmetic Operators: +, -, *, /, % </h3>";
        $a = 10;
        $b = 5;
        echo "Numbers: $a and $b<br>"; // Displaying the original numbers

        echo "Addition:       $a + $b = " . ($a + $b) . "<br>";
        echo "Subtraction:    $a - $b = " . ($a - $b) . "<br>";
        echo "Multiplication: $a * $b = " . ($a * $b) . "<br>";
        echo "Division:       $a / $b = " . ($a / $b) . "<br>";
        echo "Modulus (Remainder): $a % $b = " . ($a % $b) . "<br>";

    ?>
</body>
</html>
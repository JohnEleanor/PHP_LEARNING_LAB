<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Section: Assignment Operators: =, +=, -=, *=, /=, %=
        echo "<h3>Assignment Operators: =, +=, -=, *=, /=, %=</h3>";
        $a = 5;

        echo "a = $a";
        echo "<br>";

        $a += 3;  // Equivalent to: $a = $a + 3
        echo "a += 3: ".$a;
        echo "<br>";

        $a -= 2;  // Equivalent to: $a = $a - 2
        echo "a -= 2: $a<br>";

        $a *= 4;  // Equivalent to: $a = $a * 4
        echo "a *= 4: $a<br>";

        $a /= 2;  // Equivalent to: $a = $a / 2
        echo "a /= 2: $a<br>";

        $a %= 5;  // Equivalent to: $a = $a % 5
        echo "a %= 5: $a<br>";
        ?>
</body>
</html>

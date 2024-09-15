<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    // Section: Comparison Operators: ==, !=, >, <, >=, <=
    echo "<h3>Comparison Operators: ==, !=, <>,  >, <, >=, <=</h3>";

    $a = 10;
    $b = 5;
    echo "<h1>\$a = 10, \$b = 5</h1><br>";

    // Display only true/false using Ternary Operator(?:)
        echo "$a == $b: ";
        if ($a == $b) {
            echo "true";
        } else {
            echo "false";
        }
    echo "<br>"; // Equal to

    echo "$a != $b: " . ($a != $b ? "true" : "false") . "<br>"; // Not equal to
    echo "$a <> $b: " . ($a <> $b ? "true" : "false") . "<br>"; // Not equal to (less common)
    echo "$a > $b: " . ($a > $b ? "true" : "false") . "<br>";   // Greater than
    echo "$a < $b: " . ($a < $b ? "true" : "false") . "<br>";   // Less than
    echo "$a >= $b: " . ($a >= $b ? "true" : "false") . "<br>"; // Greater than or equal to
    echo "$a <= $b: " . ($a <= $b ? "true" : "false") . "<br>"; // Less than or equal to

    echo "<br>";
    echo $username = isset($_POST["username"]) ? $_POST["username"] : "lisa";
    echo "<br><br>";

    // Using var_dump() for detailed boolean output
    echo "Using vardump()<br>";
    echo "$a == $b: "; var_dump($a == $b); echo "<br>"; // Equal to
    echo "$a != $b: "; var_dump($a != $b); echo "<br>"; // Not equal to
    echo "$a <> $b: "; var_dump($a <> $b); echo "<br>"; // Not equal to (less common)
    echo "$a > $b: "; var_dump($a > $b); echo "<br>";   // Greater than
    echo "$a < $b: "; var_dump($a < $b); echo "<br>";   // Less than
    echo "$a >= $b: "; var_dump($a >= $b); echo "<br>"; // Greater than or equal to
    echo "$a <= $b: "; var_dump($a <= $b); echo "<br>"; // Less than or equal to
    echo "<br>";

    //!= VS. <>
    $x = 5;
    $y = "5";

    echo "!= VS. <> <br>";
    echo "\$x = "; echo var_dump($x);echo "\$y = "; echo var_dump($y);echo "<br>"; 
    if ($x != $y) {
    echo "$x is not equal to $y"; 
    } else{ echo "\$x!=\$y: "; echo var_dump($x); echo " is loosely equal to "; echo var_dump($y)."<br>";}

    if ($x <> $y) {
    echo "$x is not equal to $y"; 
    } else{ echo "\$x<>\$y: "; echo var_dump($x); echo " is loosely equal to "; echo var_dump($y)."<br>";}
    echo "<br>";

    // !== (the strict not equal operator) compare both the value and the type of variables
    echo "=== VS. !==<br>";
    if ($x === $y) {
        echo "\$x===\$y: "; echo var_dump($x); echo "is strictly equal to "; echo var_dump($y);
    } elseif($x !== $y){
        echo "\$x!==\$y: "; echo var_dump($x); echo "is strictly not equal to "; echo var_dump($y);
    }

?>
</body>
</html>
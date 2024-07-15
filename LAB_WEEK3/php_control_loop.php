<?php

//for Loop
echo "for Loop <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Count: $i <br>";
}

echo "<br> <hr>";

//for Loop with break
echo "for Loop with break <br>";
for ($i = 0; $i < 10; $i++) {
    echo "Count: $i <br>";
    if ($i == 3) {
        break; // Exit the loop when $i reaches 3
    }
}

echo "<br> <hr>";

//for Loop with continue
echo "for Loop with continue <br>";
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue; // Skip the rest of the current iteration when $i is 2
    }
    echo "Count: $i <br>";
}

echo "<br> <hr>";

//while Loop
echo "while Loop <br>";
$a = 1;

while ($a <= 3) {
    echo "Number: $a<br>";
    $a++;
}

echo "<br> <hr>";

//while Loop with break
echo "while Loop with break <br>";
$x = 0;
while (true) { // Infinite loop
    echo "Count: $x <br>";
    $x++;
    if ($x >= 5) {
        break; // Exit the loop when $x reaches 5
    }
}

echo "<br> <hr>";

//while Loop with continue
echo "while Loop with continue <br>";

$x = 0;
while ($x < 5) {
    $x++;
    if ($x == 3) {
        // print("x==3 <br>");
        continue; // Skip the rest of the current iteration when $x is 3
    }
    echo "Count: $x <br>";
}

echo "<br> <hr>";

//do-while Loop
echo "do-while Loop <br>";

$counter = 0;
do {
    echo "Counter: $counter<br>";
    $counter++;
} while ($counter < 2); // the semicolon at the end of do-while

echo "<br> <hr>";

//do-while Loop with break
echo "while Loop with break <br>";

$x = 0;
do {
    echo "Count: $x <br>";
    $x++;
    if ($x == 3) {
        break; // Exit the loop when $x reaches 3
    }
} while (true); // Loop runs at least once

echo "<br> <hr>";

//do-while Loop with continue
echo "while Loop with continue <br>";

$x = 0;
do {
    $x++;
    if ($x == 3) {
        continue; // Skip the rest of the current iteration when $x is 3
    }
    echo "Count: $x <br>";
} while ($x < 5); 

echo "<br> <hr>";

//foreach Loop(for Arrays)
echo "foreach Loop <br>";
$fruits = ["apple", "banana", "orange"];

foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}

echo "<br> <hr>";

//foreach Loop with break (for Arrays)
echo "foreach Loop with break <br>";
$colors = ["red", "green", "blue"];
foreach ($colors as $color) {
    echo "$color <br>";
    if ($color == "green") {
        break; // Exit the loop when the color is "green"
    }
}

echo "<br> <hr>";

//foreach Loop with continue (for Arrays)
echo "foreach Loop with continue <br>";
$colors = ["red", "green", "blue"];
foreach ($colors as $color) {
    if ($color == "green") {
        continue; // Skip the rest of the current iteration when the color is "green"
    }
    echo "$color <br>";
}

?>

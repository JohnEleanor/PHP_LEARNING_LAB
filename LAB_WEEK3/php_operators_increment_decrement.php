<?php

// Section: Increment/Decrement Operators: Increment (++), Decrement (--)
echo "<h3>Increment/Decrement Operators: ++, --</h3>";

$a = 5;

// Pre-increment
echo "Pre-Increment (++a):<br>";
echo "\$a before: $a<br>";
$result = ++$a;  //equal to $result = $a = $a + 1; 
echo "Result: $result<br>";
echo "\$a after: $a<br>";
echo "<hr>";

// Post-increment
echo "Post-Increment (a++):<br>";
echo "\$a before: $a<br>";
$result = $a++;
echo "Result: $result<br>";
echo "\$a after: $a<br>";
echo "<hr>";

// Pre-decrement
echo "Pre-Decrement (--a):<br>";
echo "\$a before: $a<br>";
$result = --$a;  //equal to $result = $a = $a - 1; 
echo "Result: $result<br>";
echo "\$a after: $a<br>";
echo "<hr>";

// Post-decrement
echo "Post-Decrement (a--):<br>";
echo "\$a before: $a<br>";
$result = $a--;
echo "Result: $result<br>";
echo "\$a after: $a<br>";
echo "<hr>";

echo "Example use case";
echo "<br>";

for ($i = 0; $i < 5; ++$i) { //more conventional
    echo $i . " "; // Output: 0 1 2 3 4
}
echo "<br>";
for ($i = 0; $i < 5; $i++) {
    echo $i . " "; // Output: 0 1 2 3 4
}

?>

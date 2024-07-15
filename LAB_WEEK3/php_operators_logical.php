<?php

// Section: Logical Operators: And (&&, and), Or (||, or), Not (!)
echo "<h3>Logical Operators: && (and), || (or), XOR, ! (not)</h3>";

$a = true;
$b = false;

echo "\$a = true, \$b = false<br>";
echo "\$a && \$b: "; echo var_dump($a && $b) . var_dump($a AND $b); echo "<br>"; // And
echo "\$a || \$b: "; echo var_dump($a || $b) . var_dump($a OR $b); echo "<br>"; // Or
echo "\$a XOR \$b: "; echo var_dump($a XOR $b) . "<br>"; // Or
echo "!\$a: "; echo var_dump(!$a); // Not
echo "<br><br>";

//the classic staircase light switch puzzle
$switch1 = false; 
$switch2 = true;
print("SW1".var_dump($switch1)." ");
print("สวิตที่ 2 : ".var_dump($switch2)."<br>");
$lightIsOn = ($switch1 xor $switch2); // XOR to determine light state
echo "\$switch1 is "; echo var_dump($switch1) . "<br>";
// echo "\$switch1 is " . ($switch1 ? 'true' : 'false') . "<br>"; //display boolean using string
echo "\$switch2 is "; echo var_dump($switch2) . "<br>"; 
echo "Light is: "; echo var_dump($lightIsOn) . "<br>"; 
echo "<br>";

//Bitwise XOR
//use XOR to toggle features to set on and off based on a bitwise flag.
$x = 0b0100; // Prefix 0b indicate binary(base-2)
$y = 0b0011; // 

// Displaying binary values with leading zeros
echo str_pad(decbin($x), 4, "0", STR_PAD_LEFT);
echo "<br>";
echo str_pad(decbin($y), 4, "0", STR_PAD_LEFT);
echo "<br>";
echo "\$x = " . str_pad(decbin($x), 4, "0", STR_PAD_LEFT) . "<br>"; // Pad to 4 bits
echo "\$y = " . str_pad(decbin($y), 4, "0", STR_PAD_LEFT) . "<br>";

$result = $x ^ $y; 
echo "Result: " . str_pad(decbin($result), 4, "0", STR_PAD_LEFT); // Display binary value

?>



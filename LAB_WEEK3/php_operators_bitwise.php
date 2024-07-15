<?php

$a = 0b0101;  // Binary: 5
$b = 0b0011;  // Binary: 3

//echo $a; output = 5

echo "a      = " . str_pad(decbin($a), 4, "0", STR_PAD_LEFT) . "<br>";
echo "b      = " . str_pad(decbin($b), 4, "0", STR_PAD_LEFT) . "<br>";
echo "<br>";

// Bitwise AND (&)
$result = $a & $b;
echo "a & b  = " . str_pad(decbin($result), 4, "0", STR_PAD_LEFT) . " (Decimal: $result)<br>";

// Bitwise OR (|)
$result = $a | $b;
echo "a | b  = " . str_pad(decbin($result), 4, "0", STR_PAD_LEFT) . " (Decimal: $result)<br>";

// Bitwise XOR (^)
$result = $a ^ $b;
echo "a ^ b  = " . str_pad(decbin($result), 4, "0", STR_PAD_LEFT) . " (Decimal: $result)<br>";

// Bitwise NOT (~)
$result = ~$a;
echo "~a     = " . str_pad(decbin($result & 0b1111), 4, "0", STR_PAD_LEFT) . " (Decimal: $result)<br>";

// Bitwise Left Shift (<<)
$result = $a << 2; // Shift left by 2 bits
echo "a << 2 = " . str_pad(decbin($result), 4, "0", STR_PAD_LEFT) . " (Decimal: $result)<br>";

// Bitwise Right Shift (>>)
$result = $a >> 1; // Shift right by 1 bit
echo "a >> 1 = " . str_pad(decbin($result), 4, "9", STR_PAD_LEFT) . " (Decimal: $result)<br>";

?>
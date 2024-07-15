<?php
//Example 1: Arithmetic and Assignment:
$x = 5 + 3 * 2;  // Result: 11 (Multiplication has higher precedence than addition)
print($x);
print("<hr>");
echo "<br><br>";

//Example 2: Comparison and Logical:
$age = 25;
$isStudent = true;
if ($age >= 18 && !$isStudent) { // First checks age, then negates isStudent, finally combines with &&
    echo "Eligible for discount";
}else {
    echo "Eligible for not discount";
}
print("<hr>");
echo "<br><br>";

//Example 3: Multiple Operators and Parentheses:
$a = 10;
$b = 5;
$c = 3;
print($a * $b * $c);
print("<hr>");
echo "<br><br>";

//Example 4: Calculating Compound Interest
$result = ($a - $b) * $c + $a / 2; // Result: 20 (Parentheses override normal precedence)

$principal = 1000;  // Initial investment amount
$rate = 0.05;       // Annual interest rate (5%)
$time = 3;         // Number of years
$n = 12;           // Number of times interest is compounded per year

// Calculate compound interest using the formula: A = P (1 + r/n)^(nt)
$amount = $principal * pow(1 + ($rate / $n), ($n * $time));

// Calculate the earned interest
$interest_earned = $amount - $principal;
// print($interest_earned);
echo "Total amount after $time years: $" . number_format($amount, 2) . "<br>";
echo "Interest earned: $" . number_format($interest_earned, 2) . "<br>";
print("<hr>");
echo "<br><br>";

//Example 5: Nested Ternary Operator and String Comparison
$score = 100;
$isMember = true;

$grade = ($score >= 90) ? 'A' : ( 
  ( $score >= 80) ? ($isMember ? 'B+' : 'B' ) : 
  ( ($score >= 70) ? 'C' : 'D' ) 
);
print("Your Grade is : ".$grade);
print("<hr>");



print('if else in one line ');
print("<br>");
print("Condition ? true : false ");
print("<br>");
print("if a <  b ? 'true' : 'false'");
?>

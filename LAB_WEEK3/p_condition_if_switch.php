<?php

// if Statement:
$age = 18;

if ($age >= 18) {
    echo "You are an adult.";
}

echo "<br><br>";

//if-else Statement:

$temperature = 25;

if ($temperature > 30) {
    echo "It's hot!";
} else {
    echo "It's not so hot.";
}

echo "<br><br>";

//if-elseif-else Statement:

    $score = 85;

if ($score >= 90) {
    echo "Excellent!";
} elseif ($score >= 80) {
    echo "Great!";
} elseif ($score >= 70) {
    echo "Good!";
} else {
    echo "Needs improvement.";
}

echo "<br><br>";

//conditional statement: switch
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    default:
        echo "Today is neither Monday nor Tuesday";
}

?>
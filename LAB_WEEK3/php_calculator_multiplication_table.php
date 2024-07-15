<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Calculator</h2>

    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter Number 1" required><br><br>
        <input type="number" name="num2" placeholder="Enter Number 2" required><br><br>
        
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get values from the form
        $num1 = $_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["num1"] : "";
        $num2 = $_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["num2"] : "";
        $operator = $_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["operator"] : "";

        // Perform calculation based on selected operator
        if ($operator == "add") {
            $result = $num1 + $num2;
        } elseif ($operator == "subtract") {
            $result = $num1 - $num2;
        } elseif ($operator == "multiply") {
            $result = $num1 * $num2;
        } elseif ($operator == "divide") {
            if ($num2 == 0) {
                $result = "Division by zero is not allowed.";
            } else {
                $result = $num1 / $num2;
            }
        }

        // Display the result
        if (is_numeric($result)) {  // Check if result is a number
            echo "<p>Result: $result</p>";
        } else {
            echo "<p style='color: red;'>Error: $result</p>";
        }
    }

        //Outer for loop (number to be multiplied)
        echo "<h2>Multiplication Table for 1 to 12</h2>";
        for ($number = 1; $number <= 12; $number++) {
            //Inner for loop (numbers 1 to 12)
            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "$number x $i = $result <br>"; // Single column format
            }
            echo "<br>"; // Add a line break after each number's multiplication table
        }

    ?>
</body>
</html>
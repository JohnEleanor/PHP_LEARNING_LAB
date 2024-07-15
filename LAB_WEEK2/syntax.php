<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/style.css">
</head>

<body>
    <div class="container">
        <h1>SIMPLE PRINT </h1>
    <?php
        $name = "Lisa RockStar";
        echo "Hello, $name!";
        echo "<br><br>";

        $message = "Hello, World";
        echo "<br>";
        echo ("Hello, world!");
        echo "<br><br>";


        $name = "Alice ";
        
        print($name);
        print("Bob");
        echo "<br><br>";
        print"Bob1";
        echo "<br><br>";
        printf("Bob2");
        echo "<br><br>";


        // ! String format 
        $name = "Jay ";
        $age = 21;
        printf("<h1> Hello my name is %s and i am %d year old </h1>", $name, $age);
    ?>
    <hr>

    <h1>PHP STRING FUNCTION</h1>
    <?php 
        $msg = "This is a message";
        $lenght = strlen($msg);
        echo "$msg <br>";
        echo "The message lenght is $lenght charecter";
    ?>
 </div>

</body>

</html>
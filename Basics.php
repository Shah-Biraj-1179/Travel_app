<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <div class="container">
        This is my first PHP Website.<br>
    <?php
    define("GREETING", "Welcome to PHP World!<br>");
    echo GREETING;
    define("PI", 3.14);
    echo "<br>";

        echo "Hello World and this is printed using PHP";
        echo "<br>";
        // Single line comment
        /*
            This is a multi-line comment
            which spans multiple lines
        */
    
    // Variables in PHP
    $variable1 = 15;
    $variable2 = 6;
    echo $variable1;
    echo "<br>";
    echo $variable2;
    echo "<br>";
    Echo $variable1 + $variable2;

    // Operators in PHP :-

    // Arithmetic Operators
    echo "<br>";
    echo "The value of variable1 + variable2 is :- ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of variable1 - variable2 is :- ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of variable1 * variable2 is :- ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of variable1 / variable2 is :- ";
    echo $variable1 / $variable2;
    echo "<br>";

    // Assignment Operators
    $newVar = $variable2;
    // $newVar += 1;
    // $newVar -= 1;
    // $newVar *= 2;
    $newVar /= 2;
    echo "The value of newVar is :- ";
    echo $newVar;
    echo "<br>";

    // Comparison Operators
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1 == 4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1 != 4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1 >= 4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1 <= 4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    // Increment/Decrement Operators
    // echo $variable1++;
    // echo "<br>";
    // echo $variable1;
    // echo $variable1--;
    // echo "<br>";
    // echo $variable1;
    // echo ++$variable1;
    // echo "<br>";
    // echo $variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;
    echo "<br>";

    // Logical Operators

    // AND 
    // $myVar = (true and false);
    // $myVar = (true and true);
    // $myVar = (false and true);
    $myVar = (false and false);
    echo var_dump($myVar);
    echo "<br>";

    //OR
    // $myVar = (true or false);
    // $myVar = (false or false);
    $myVar = (true or true);
    // $myVar = (false or true);
    echo var_dump($myVar);
    echo "<br>";

    // XOR
    // $myVar = (false xor false);
    $myVar = (true xor false);
    echo var_dump($myVar);
    
    ?>

    <?php
        echo "<br> <br> Data Types: <br>";
        // Data Types in PHP
        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 67.5;
        echo var_dump($var);
        echo "<br>";

        $var = "This is a string";
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";

        $var = null;
        echo var_dump($var);
        echo "<br>";
        echo "<br>";
        echo PI;
        echo "<br>";
        echo GREETING;
    ?>

    <?php
        // echo "Hello World!";
    ?>

    </div>
</body>

</html>
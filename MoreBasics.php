<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        max-width: 80%;
        margin: auto;
        background-color: rgb(234, 164, 164);
        padding: 25px;
        /* border-radius: 10px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px; */
    }
</style>
<body>
    <div class="container">
        <h1> Lets learn about PHP </h1>
        <p>Your Election Status is here:-</p>

    <?php
    // IF ELSE and ELSE IF Statement in PHP
    // $age = 17;
    // $age = 25;
    $age = 7;
    if ($age >= 18) {
        echo "You are eligible to vote.";
    }
    else if ($age == 17) {
        echo "You are almost eligible to vote.";
    }
    else if ($age == 7) {
        echo "You are 7 years old.";
    }
    else {
        echo "You are not eligible to vote.";
    }

    // Arrays in PHP
    $languages = array("Python", "C", "PHP", "JavaScript", "Java", "HTML");
    // echo $languages[0];
    // echo "<br>";
    // echo count($languages);

    // Loops in PHP
    $a = 0;
    // While Loop
    while ($a <= 10) {
        echo "<br>The value of a from the while loop is: ";
        echo $a;
        $a ++;
    }

    // Iterating arrays in PHP using While Loop
    $a = 0;
    // While Loop
    while ($a < count($languages)) {
        echo "<br>The value of language from the while loop is: ";
        echo $languages[$a];
        $a ++;
    }

    // Do While Loop
    $a = 0;
    do {
        echo "<br>The value of languages from the do while loop is: ";
        echo $languages[$a];
        $a ++;
    } while ($a < count($languages));

    // Loops in PHP
    // $a = 20;
    // Do While Loop
    // do {
    //     echo "<br>The value of a is: ";
    //     echo $a;
    //     $a ++;
    // }while ($a <= 10)

    // For Loop
    for ($a=0; $a <= 10; $a++) {
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    // Foreach Loop
    foreach ($languages as $value) {
        echo "<br>The value of language from the foreach loop is: ";
        echo $value;
    }

    // Functions in PHP
    function print5() {
        echo "<br>FIVE";
    }
    print5();
    print5();
    print5();
    print5();
    print5();

    function print_number($number) {
        echo "<br> Your number is: ";
        echo $number;
    }
    print_number(98);
    print_number(45);
    print_number(67);
    ?>
    </div>
</body>
</html>
<?php
$insert = false;
if (isset($_POST['name'])) {
    // Set connection variables}
    
    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $name   = $_POST['name'];
    $age    = $_POST['age'];
    $gender = $_POST['gender'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $desc   = $_POST['desc'];

    $sql = "INSERT INTO `europe_trip`.`trip` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;

    if ($con->query($sql) == true) {
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } 
    else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Adventure Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Single+Ink:wght@100..900&family=Bungee+Spice&family=Kaushan+Script&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="img1" src="img1.jpg" alt="IIT-Madras">
    <div class="container">
        <h1>Welcome to IIT Madras Europe Trip Form</h1>
        <p>Enter your details and submit this form to confirm your participation in this trip</p>

        <?php
        if($insert == true){
            echo "<p class='SubmitMsg'> Thanks for submitting your form. We are happy to see you joining us for the Europe trip </p>";
        }
    ?>
    
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your E-mail">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other Information here"></textarea>
            <button class="btn">Submit</button>
        </form>

    </div>
    <script src="index.js"></script>

</body>

</html>
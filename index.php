<?php
 $insert=false;
if(isset($_POST['name'])){
  
$server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `phone`, `gender`, `email`, `other`, `date`) VALUES 
    ('$name', '$age', '$phone', '$gender', '$email', '$desc', current_timestamp());";
    //echo $sql;

    if($con->query($sql) == true){
       // echo "Successfully inserted";}
       $insert=true;
    }
        else{
            echo "ERROR : $sql <br> $con->error";
        }
        $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO TRAVEL FORM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200&family=Poppins:wght@200;300&family=Raleway:wght@300&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="COLLEGE TRIP" >
    <div class="container">
        <h2>WELCOME TO COLLEGE TRIP</h2>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <?php
        if($insert==true){
        echo "<p class='submitmsg'>Thanks for submitting your form.We are happy to see you joining us</p>";
        }
        ?>
        <form action="index.php" method="post">
           <input type="text" name="name" id="name" placeholder="Enter your name">
           <input type="text" name="age" id="age" placeholder="Enter your age">
           <input type="phone" name="phone" id="phone" placeholder="Enter your mob no">
           <input type="text" name="gender" id="gender" placeholder="Enter your gender">
           <input type="email" name="email" id="email" placeholder="Enter your email">
           <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
           <button class="btn">Submit</button>
        
        </form>
    </div>
    <script src="index.js"></script>
  
</body>
</html>
<?php
$insert=false;
if(isset($_POST['name'])){             
$server="localhost";
$username="root";
$password="";
$con= mysqli_connect($server, $username,$password);
if(!$con){
    die("connection to this is lost".mysqli_connect_error());
    
}
//echo "Success";;;;;;
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) 
VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

if($con->query($sql)==true){
    //echo "successfully inserted";
    $insert= true;
}
else{
    echo "error: $sql <br> $con->error";

}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h3>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <?php
        if($insert== true){
    echo '<p class="submitMsg">Thanks for submitting your form</p>';
        }
?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
            <button class="'btn">Reset</button>
        </form>
    </div>
    <script src="index.js"></script>
    <!--
        INSERT INTO `trip` (`sno`, `Name`, `Age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('1', 'test name', '23', 'male', 'hsiooms@gmail.com', '999999999', 'first mssg', current_timestamp());
        INSERT INTO `trip` (`S.No.`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('1', 'cgghcjhcvjh', '22', 'male', 'fdyqvdjhbxvgq', '9999999999', 'vhvjhvkjbkvycqwertyuioplkjhgvfdsazxcvbnm', '2023-11-17 16:28:00.000000');
    -->
</body>
</html>
<?php

require_once('./dbconnection.php');

$db = db_connect();

// Handle form values sent by index.php
if (isset($_POST['insert'])) { //make sure we submit the data
  $userName = $_POST['company_name']; // access the form data
  $userEmail = $_POST['email'];
  $userPass = $_POST['pass'];
  $phone = $_POST['phone'];
  $country = $_POST['country'];
  $city= $_POST['city'];
  $province = $_POST['province'];
 

  //prepare your query string

  $sql1 = "INSERT INTO gigworker (userName, userEmail, userPWD, phone, country, city, province) 
  VALUES ('".$_POST['login']."', '".$_POST['email']."', '".$_POST['pass']."', '".$_POST['phone']."', '".$_POST['country']."', '".$_POST['city']."', '".$_POST['province']."')" 
  or die($db->error);


  $result = mysqli_query($db, $sql1);

  // For INSERT statements, $result is true/false

  $id = mysqli_insert_id($db); //the mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) 
  //redirect to show page with generated id as a parameter

  //Return to main login page when successful
  header("Location:  ./index.php");
  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/employer.css"/>
    <link rel="stylesheet" href="assets/style_index.css"/>
    <link rel="stylesheet" href="submission_gig.js"/>
    <link rel="stylesheet" href="images/"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="icon/icontitle.ico"/>
    <script src="./submission_gig.js" defer></script>
    <title>Worker Register - GIGS</title>

</head>

<body>

    <div class="container">
    <section class="header">
        <h1>Do your Gig Worker registration!</h1>
    </section>
        <hr>
        <form class="form form--hidden" id="createAccount" action = ""  onsubmit="return validate();"  method="POST">
            <!-- You will need to write the validate function for this form. -->

            <div class="form_content">
                <label for="email">Email Address</label><br>
                <input type="text" name="email" id="email" placeholder="Email"><br>
                <span class="alert" id="emailError"></span>
            </div>

            <div class="form_content">
                <label for="login">User Name</label><br>
                <input type="text" name="login" id="login" placeholder="User name"><br>
                <span class="alert" id="loginError"></span>
            </div>

            <div class="form_content">
                <label for="phone">Phone</label>
                <input type="integer" id="phone" name="phone" placeholder="Type your phone..."/>
                <a>...Message error here...</a>
            </div>

            <div class="form_content">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" placeholder="Type your country..."/>
                <a>...Message error here...</a>
            </div>

            <div class="form_content">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Type your city..."/>
                <a>...Message error here...</a>
            </div>

            <div class="form_content">
                <label for="province">Province</label>
                <input type="text" id="province" name="province" placeholder="Type your province..."/>
                <a>...Message error here...</a>
            </div>

            <div class="form_content">
                <label for="pass">Password</label><br>
                <input type="password" name="pass" id="pass" placeholder="Password"><br>
                <span class="alert" id="passError"></span>
            </div>
        
            <div class="form_content">
                <label for="pass2">Re-type Password</label><br>
                <input type="password" name="pass2" id="pass2" placeholder="Password"><br>
                <span class="alert" id="pass2Error"></span>
            </div><br>

            <!--
            <div class="checkbox">
                <input type="checkbox" name="newsletter" id="newsletter" onclick="receive()">
                <label for="newsletter">I agree to receive GIGS newsletters</label>
                
            </div>

            <div class="checkbox">
                <input type="checkbox" name="terms" id="terms" required>
                <label for="terms">I agree to the terms and conditions</label>
            </div><br>-->
            

            <button type="submit" class="blue_button" name = "insert" >Sign-Up</button>
            <button type="reset" id="clean" class="red_button" onclick="resetProfile();">Reset</button>  

            <div class="index">
                Already have an account? <br>
                <a href="index.php"> Login</a>
            </div>
        </form>
         
    </div>


</body>
</html>

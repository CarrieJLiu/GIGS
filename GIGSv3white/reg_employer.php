
<?php

require_once('./dbconnection.php');

$db = db_connect();
  
// Handle form values sent by index.php
if (isset($_POST['insert'])) { //make sure we submit the data
    $userName = $_POST['company_name']; // access the form data
    $userEmail = $_POST['email'];
    $userPWD = $_POST['password'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city= $_POST['city'];
    $province = $_POST['province'];
    
    //$password = $_POST['password'];
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO employer (userName, userEmail, userPWD, phone, country, city, province) 
    VALUES ('".$_POST['company_name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['phone']."', '".$_POST['country']."', '".$_POST['city']."', '".$_POST['province']."')" 
    or die($db->error);
    

    /*prepare your query string
    $sql = "INSERT INTO employer (userName, userEmail, userPWD, phone, country, city, province) 
    VALUES ('".$_POST['company_name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['phone']."', '".$_POST['country']."', '".$_POST['city']."', '".$_POST['province']."')" 
    or die($db->error);
    */


  $result = mysqli_query($db, $sql);

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
    <link rel="stylesheet" href="images/"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="icon/icontitle.ico"/>
    <script src="./submission_form.js" defer></script>
    <title>Employer Register - GIGS</title>

</head>


<body>



	<div class="container">
	    <section class="header">
	        <h1>New Employer</h1>
	    </section>
        
        <form action = "" class="form form--hidden" id="createAccount" onsubmit="return validate();" method="POST" >
            <div class="form_content">
                <label for="company_name">Company / Username</label>
                <input type="text" id="company_name" name="company_name" placeholder="Type Company Name..."/>
                <a>...Message error here...</a>
            </div>

            <div class="form_content">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Type your email..."/>
                <a>...Message error here...</a>
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
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Type your password..."/>
                <a>...Message error here...</a>
            </div>

            <div class="form_content">
                <label for="password_confirmation">Re-type Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-type your password..."/>
                <a>...Message error here...</a>
            </div>
            
            <!--<div class="checkbox">
                <input type="checkbox" name="newsletter" id="newsletter" onclick="receive()">
                <label for="newsletter">I agree to receive GIGS newsletters</label>                
            </div>-->

            <div class="checkbox">
                <input type="checkbox" name="terms" id="terms" required/>
                <label for="terms">I agree to the terms and conditions</label>
            </div><br>
            
            <button type="submit" class="blue_button" name = "insert" >Sign-Up</button>
            <button type="reset" id="clean" class="red_button" onclick="resetProfile();">Reset</button>            
            
            <!--<button type="submit" name="register">Register</button>-->
            
            <div class="text_create">
                <a href="index.php">Home</a>
            </div>
            
        </form>
    </div>
    
    <!--<script src="js/registration.js"></script>-->
    
</body>
</html>



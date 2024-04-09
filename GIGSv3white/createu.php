<?php

require_once('./dbconnection.php');

$db = db_connect();

// Handle form values sent by index.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //make sure we submit the data
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
<?php
require_once('./dbconnection.php');

session_start();
$db = db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $loginName=$_POST['username'];
    $loginPass=$_POST['password'];
    
    $sql1="SELECT * FROM gigworker WHERE userName = '".$_POST['username']."' AND userPWD = '".$_POST['password']."' limit 1 ";


    $result3= mysqli_query($db,$sql1);



    if(mysqli_num_rows($result3)==1) {
        $_SESSION['username'] = $username;
        header("Location:  ./firstpage.php");
    }

    else {
        header("Location:  ./index.php");
    }
}




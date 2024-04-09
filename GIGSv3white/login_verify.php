<?php
require_once('./dbconnection.php');

session_start();
$db = db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $loginName=$_POST['username'];
    $password=$_POST['password'];

    /*
    if(password_verify($password, $user['userPWD'])){
        echo "thanks for login";
    }else{
        echo "bad password";
    }
    */
    
    $sql="SELECT * FROM employer WHERE userName = '".$_POST['username']."' AND userPWD = '".$_POST['password']."' limit 1 ";
    $sql1="SELECT * FROM gigworker WHERE userName = '".$_POST['username']."' AND userPWD = '".$_POST['password']."' limit 1 ";


    $result2 = mysqli_query($db,$sql);
    $result3 = mysqli_query($db,$sql1);


    if(mysqli_num_rows($result2)==1) {
        $_SESSION['username'] = $username;
        header("Location:  ./firstpage.php");
    }elseif(mysqli_num_rows($result3)==1) {
        $_SESSION['username'] = $username;
        header("Location:  ./firstpage.php");
    }
    
    
    elseif(mysqli_num_rows($result2)==0){
        $_SESSION['username'] = $username; 
        echo ("<script>
        window.alert('Please enter Valid Credentials or Create an user')
        window.location.href='./index.php';</script>");
        session_destroy();
    }elseif(mysqli_num_rows($result3)==0){
        $_SESSION['username'] = $username; 
        echo ("<script>
        window.alert('Please enter Valid Credentials or Create an user')
        window.location.href='./index.php';</script>");
        session_destroy();
    }
    
}




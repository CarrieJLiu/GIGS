




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style_index.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="icon/icontitle.ico"/>
    <script src="js/registration.js" defer ></script>
    <title>Welcome to GIGS!</title>

</head>

<body>    
<?php 

include 'navBar.php'; 

?>

    <div class="main_login">  
        <div class="left_login">
            <h1>Welcome to Gigs!</h1>
                <h2>A quick way to find help <br> in a fast paced industry</h2>
        </div>

        <form action="./login_verify.php" id="login" method="POST">

        
            <div class="right_login">
                <div class="card_login">                
                    <h1>GIGS</h1>                
                    <div class="textfield">                    
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="textfield">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    
                    <button class="button_login" type="submit">Sign In</button>

                    <!--<form name="form1" action="" method="post">
                        <input class="button_login" type="submit" name="sign" value="Sign In">
                    </form>-->

                    
                    <div class="text_create">
                        Don't have an account? 
                        <a href="signup.php"> Create New Account</a>
                    </div>
                </div>                       
            </div>   
        </form>
    </div>

    <?php include 'footer.php'; ?>

    
</body>
</html>


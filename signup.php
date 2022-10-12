<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="widtht=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Login / sign up form</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/assests/favicon.ico">

    <link rel="stylesheet" href="main.css">
    <!-- <title>Document</title> -->
</head>
<body>
<div class="container">
    <form  id="createAccount" action="signup.php" method="post">
            <h1 class="form__title">create Account</h1>
            <div class="form__message form__message--error">
        </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Enter username" name="username" maxlength="15">
                <div class="form__input-error-message"></div>
            </div>
            
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Enter password" name="password" maxlength="25">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password" name="cpassword">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" name="btn" type="submit">Countinue</button>
                <p class="form__text">
                    <a class="form__link" href="login_website.php" id = "linklogin">Already have an account? Sign in</a>
                </p> 
                <!-- <p class="form__text">
                    <a class="form__link" href="home2.php" id = "linklogin">Regestration For Worker</a>
                </p>  -->
        </form>
        <?php
        require 'login_db_connect.php';

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
       
        if(isset($_POST['btn']))
        {
            $user=$_POST['username'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            if($password!=$cpassword)
            {
                echo 'Password Does not Match';
            }
            else{
            // echo header("location:welcome.php");
            $q="SELECT * FROM `login` where `user`='$user'";
        $r=mysqli_query($connection,$q);
        $s=mysqli_num_rows($r);
        if($s>0)
        {
            echo'User Already Exist!!';
        
        }
        else{
            $w="INSERT INTO `login`(`user`,`password`) VALUES ('$user','$password')";
            $t=mysqli_query($connection,$w);
            
            if($t)
            {
                echo'You Haver Sign Up Successfully Now Go To Login!!';
            
            }
        }
    }
        }
        
    }
   
    ?>
</div>
<script src="main.js"></script>
</body>
       </html>
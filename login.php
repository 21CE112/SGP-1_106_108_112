
<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="loginpage.css">
    </head>
    <body>
        <style>
            body{
    background-color: black;
    width: -2px;
}
div{
    background-color: white;
    width: 35vw;
    margin:auto;
    margin-top: 20vh;
    align-content: center;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 20px;
    box-shadow: 3px 4px 8px 2px rgb(224, 224, 224, 0.25);
}  
input[type=text],input[type=password]{
    width: 28vw;
    margin: 1vw -1vh;
    padding: 0.5vw;
    border-top: thin;
    border-left: thin;
    border-right: thin;
}
input[type=password] + a
{
    color: black;
    text-align: left;
    margin-left: 3.5vw;
    width: 20vh;
}
form{
    text-align: center;
    margin: 15px;
    padding: 10px;
}
button{
    width: 28vw;
    border-radius: 20px;
    background-color: rgb(0, 0, 0);
    color: white;
    margin-top: 1vh;
    padding: 0.5vw;
    border: none;
    font-size: medium;
}
h1{
    text-align: center;
    color: black;
}
/* p{
    color: black;
    text-align: left;
    margin-left: 3.5vw;
    width: 20vh; */
/* }    */
hr{
    opacity: 80%;
    width: 30vw;
}  

a{
    color: rgb(51, 51, 51);
    text-decoration: none;
}

        </style>
        <?php
        // session_start();
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "login_detailes";
                    $connection = mysqli_connect($servername,$username,$password,$database);
                    if(!$connection)
                    {
                        echo '<p style="color:white;">Connection to the server has been failed..!!</p>'. mysqli_error($connection);
                        // echo "hfxhfxce";
                    }

                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                        $user = $_POST['username'];
                        $pass = $_POST['pswd'];
                    }

                    // echo '<p style="color:white;">Name is :- '.$user.'</p>';
                    $sql = "SELECT * FROM `login` WHERE `email`='$user' AND `password`='$pass'";
                    $res = mysqli_query($connection,$sql);
                    $result = mysqli_num_rows($res);


                    if($result)
                    {
                        echo '<p style="color:white;">Data has been inserted successfully!!</p>';
                        // $sql = mysqli_fetch_assoc();
                    //    session_start();
                       
                        // header("location:redirect.php");
                        // session_destroy();
                    }
                    else
                    {
                        echo '<p style="color:white;">User not found</p>';
                        // session_destroy();
                    }

                    // session_unset();
                    // header("location:login.php");
                    // session_destroy();
                    ?>
        <form action="/project/login.php" method="post">
            <div>
                <br>
                <h1>Login</h1>
                <hr>
                <label for="username"></label>
                <input type="text" placeholder="Username" name="username" id="username"><br>
                <label for="pswd"></label>
                <input type="password" placeholder="Password" name="pswd" id="pswd"><br>
                <!-- <p>Forgot password?</p> -->
                <a href="#">Forgot Password?</a>
                <button type="submit"><b>Login</b></button>
                <p><center>Not a member?<a href="#"> Signup</a></center></p>
                <br>
            </div>
</form>

          <?php
        // //   require 'databse_connect.php';
        // $sql = "SELECT * FROM `login`";
        //                 $res = mysqli_query($connection,$sql);
        //                 $row = mysqli_num_rows($res);
        //                 if($res)
        //                 {
        //                 echo '<p style="color:white;">There are '. $row .' rows found in database</p>';
        //                 }
        //                 else
        //             {
        //                 echo '<p style="color:white;">error</p>';
        //             }
        //             $count=0;
        //             $obj = mysqli_fetch_assoc($res);
        //             while($count<$row)
        //             {
        //                 echo '<p style="color:white;">'($count+1) .' .'.$obj[`email`]. ' is username and '. $obj[`password`].' is the password'.' created on '. $obj[`date`].'</p>';
        //                 $count = $count +1;
        //             }

          ?>
    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$server="localhost";
$username="root";
$password="";
$database="Appointment";

$conn=mysqli_connect($server,$username,$password,$database);

// echo("heheheheheh");
if(!$conn)
{
  echo("ERROR");
}
// else{
//   echo("connect");
// }

$fname=$_POST["fname"];
$uname=$_POST["uname"];
$email=$_POST["E-mail"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$date=$_POST["date"];
$time=$_POST["time"];
$issue=$_POST["issue"];

// $sql="INSERT INTO `contact` (`Sr.no`, `name`, `E-mail`, `message`) VALUES (NULL, '$name', '$email', '$message');";
$sql="INSERT INTO `appointment` (`Sr.no`, `Full Name`, `User Name`, `Email`, `Phone Number`, `Password`, `Confirm Password`, `Date`, `Time`, `Issue`) VALUES (NULL, '$fname', '$uname', '$email', '$phone', '$password', '$cpassword', '$date', '$time', '$issue');";

$result=mysqli_query($conn, $sql);
if(!$result)
{
  echo("ERROR");
}
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Appointment  </title>
    <link rel="stylesheet" href="appointment.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Appointment</div>
    <div class="content">
      <form action="#"  method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required name="fname">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required name="uname">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="E-mail" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="cpassword" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" placeholder="Enter your Date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">Time</span>
            <input type="time" placeholder="Enter your Time" name="time" required>
          </div>
        </div>
        <div class="input-box">
            <span class="details">Issue</span>
            <input type="text" placeholder="Enter your Issue" name="issue" required>
        </div>
        <!-- <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div> -->
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

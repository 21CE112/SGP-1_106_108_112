<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>
<div class="bodyimg">
   

    <!--contact section start-->
    <div class="contact-section">
        <!-- <img src="contact.jpg" alt=""> -->
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>charusat complex, Changa</div>
        <div><i class="fas fa-envelope"></i>AllJugad@email.com</div>
        <div><i class="fas fa-phone"></i>+10 123 123 123</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="contact.php" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="E-mail" class="text-box" placeholder="Your Email" required>
         <textarea name="message" id="message"  rows="10" placeholder="type your message"></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

</div>  
<?php
  require 'alljugad_db_connect.php';

    if($_SERVER['REQUEST_METHOD']="POST")
    {
      if(isset($_POST['submit']))
      {
        $us = $_POST['name'];
        $mail = $_POST['E-mail'];
        $ms = $_POST['message'];

        $q = "INSERT INTO `contact us`(`Name`,`Email ID`,`Feedback`) VALUES ('$us','$mail','$ms')";
        $res = mysqli_query($conn,$q);
      }
    }
?>
  </body>
</html>
<?php
session_start();
require 'database_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="geyser.css">
    <title>Geyser</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <!-- <img src="" alt="logo"> -->
                <span>All</span>jugad
            </div>
            <div class="nav-sider">
                <ul>
                    <li><a class="home" href="real_alljugad.php">Home</a></li>
                    <li class="dropdown"><a href="#about" class="dropbtn">Services<i class="fa fa-sort-desc"></i></a>
                        <div class="dropdown-content">
                            <a href="airconditioning.php">Air Conditioning</a>
                            <a href="plumbing.php">Plumbing</a>
                            <a href="geyser.php">Geyser</a>
                        </div>
                    </li>
                    <li class="dropdown"><a href="careers.php" class="dropbtn">Careers</a>
                        <!-- <div class="dropdown-content">
                            <a href="#">Technicians</a>
                            <a href="#">Office Suppport</a>
                            <a href="#">Werehouse Support</a>
                        </div> -->
                    </li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#footer">Contact Us</a></li>
                    <li><a href="#">login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="info">
        <div class="info1">
            <h2>Geyser Services Including Furnace Repair and Installation in Anand and Surrounding Areas</h2>
            <div class="text1">            
               Alljugad provides you to the best and highest level quality of services to repair geyser. Freezers offer most significant and savings, Are professionals can quickly identify the problem, ensuring food is kept at the appropriate temperature and maintaining your food. However,geyser must be performed with the greatest care and safety to your food. Handling them without adequate care and safety could have fatal. Alljugad work Has Provider Superior and Affordable geyser repair services.
            </div>
        </div>
        <div class="info2">
            <h2>Heating Maintenance</h2>
            <div class="text2">
                Annual service checks are the best way to keep your heater running efficiently for years to come. Our service specialists will inspect the unit, check the pilot, clean the components and look for worn parts. You’ll be notified of any potential problems so you can take necessary actions before a more serious problem develops. These routine checks help to keep your warranty in effect. Stay on top of preventive maintenance by signing up for The Johnny’s Touch maintenance program. You’ll benefit from an annual checkup, discounts on repairs and priority service.
            </div>
        </div>
        <div class="info3">
            <h2>Geyser Repair</h2>
            <div class="text3">
                A broken furnace, boiler or heat pump is no problem for the pros at Alljugad. Our certified service specialists participate in continuous training and have the expertise to repair all types and models of Geyser systems. When you’re having trouble staying warm, contact us for:

                <div class="problems">
                    <ul>
                        <li>Around-the-clock emergency heating repair</li>
                        <li>Accurate diagnoses with no hidden fees</li>
                        <li>Courteous and professional service specialists</li>
                        <li>Specials and discounts on repairs</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="info4">
            <h2>Your Leading Geyser Contractor</h2>
            <div class="text4">
                You can count on Alljugad for top-rated heating equipment from leading manufacturers. Every system we sell includes a warranty and is backed by our satisfaction guarantee. We’ll listen to your concerns and perform thorough assessments so that we can recommend the right heater for your needs.
                <br>
                <br>
                
               Alljugad is your Geyser expert in the Anand area. As your Trane Comfort Specialist, we understand the best options for creating a warm environment in your home or business.  Our friendly team is waiting to help you learn more about our Geyser repair, installation, or routine maintenance services. When the temperature drops, call Alljugad.
            </div>
        </div>
    </div>

    <div class="city">
        <div class="workerinfo">
            Select the city ans get the information about our workers
        </div>
        <form action="#" method="post">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">City</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01" name="city">
                <option selected>Choose...</option>
                <option value="1" name="p">Petlad</option>
                <option value="2">Anand</option>
                <option value="3">Nadiad</option>
              </select>
            </div>
            <button name="btn" type="Submit">Submit</button>
        </form>
    </div>
    <?php 
if($_SERVER['REQUEST_METHOD']=="POST")
            {
                if(isset($_POST['btn']))
                {
                    if($_POST['city']=='1')
                    {
                        $_SESSION['city'] = "Petlad";
$_SESSION['prof'] = "Geyser";

                      echo  "<script>  window.location.href='response.php';</script>";
                    }
                    if($_POST['city']=='2')
                    {
                        $_SESSION['city'] = "Anand";
$_SESSION['prof'] = "Geyser";

                        echo  "<script> window.location.href='response.php';</script>";
                    }
                    if($_POST['city']=='3')
                    {
                        $_SESSION['city'] = "Nadiad";
$_SESSION['prof'] = "Geyser";

                        echo  "<script> window.location.href='response.php'; </script>";
                    }
                }
            }
                ?>

            <!-- <button type="Submit">Submit</button> -->
        </form>
    </div>

    <div id="footer" class="footer">
        <div class="logoicon">
            <div class="Logo">Alljugad</div>
            <div class="social-links">
                <a href="" target="_black"><i
                        class="fa fa-facebook "></i></a>
                <a href="" target="_blank"><i
                        class="fa fa-twitter"></i></a>
                <a href=" "
                    target="_blank"><i class="fa fa-instagram"></i></a>
                <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
                <a href=""
                    target="_black"><i class="fa fa-quora"></i></a>
            </div>
        </div>

        <div class="Row">
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Air Conditioning</a></li>
                    <li><a href="#">Plumbing</a></li>
                    <li><a href="#">Geyser</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="#">alljugad</a></li>
                    <li><a href="#">Changa Road</a></li>
                    <li><a href="#">Valetva</a></li>
                    <li><a href="#">Anand,GUJARAT</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="lastfooter">
        <div class="copyright">All Content Copyright © 2022 Alljugad | Privacy Policy | Accessibility Statement</div>
    </div>
</body>

</html>
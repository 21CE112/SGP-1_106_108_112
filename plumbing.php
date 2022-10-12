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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="plumbing.css">
    <title>Plumbing</title>
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
            <h2>Best House Plumbing Services</h2>
            <div class="text1">
                city requires ample water to maintain its gardens throughout the year. Water is required not just for maintaining gardens but also for commercial, industrial and personal use. In making water available to everyone, 2 types of infrastructure in piping or plumbing are required.
                <br>
                <br>
                1) Bringing water in for usage - This system is created for you to get water worth usage for various activities in the daily chores of life
                <br> <br>
               
                2)Removing the waste out of the surrounding – This system is equally important in removing extra or wastes out of your homes to ensure you have a safe and clean environment to live in
                Be it Anand or any city in the world, this fundamental need doesn’t change at all.
            </div>
        </div>
        <div class="info2">
            <h2>Importance of plumbing</h2>
            <div class="text2">
                Plumbing involves the usage of various materials. With technology moving to great heights it has impacted the way plumbing material is used. Now you have fancy pipes that augment the look and feel of the construction. Plumbers have multiple choices to select from - copper, galvanized steel, plastic pipes and many more. Even the tap fittings available in the market have plenty of variety, too many options also create stress and confusion. Professional plumbers are very handful here and help you make the right choices that will match your budget and look elegant in your home. Their advice should not be overlooked as they are veterans and suggest the best.
            </div>
        </div>
        <div class="info3">
            <h2>What to Expect From Alljugad</h2>
            <div class="text3">
                You might not be sure if an pipe problem is simple or if you need a service specialist. If you’ve tried all possible troubleshooting steps with no change, don’t hesitate to call us. We are happy to provide a free consultation. Some pipe issues warrant professional attention. Contact us if your system is:

                <div class="problems">
                    <ul>
                        <li>CLOGGED DRAINS AND TOILETS</li>
                        <li>LEAKY FAUCETS AND PIPES</li>
                        <li>WATER HEATER ISSUES</li>
                        <li>LOW WATER PRESSURE</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="info4">
            <h2>Trust Alljugad</h2>
            <div class="text4">
                Our certified service specialists must pass background checks and be respectful and courteous at all times. We never charge hidden fees or try to sell you something you don’t need. It can be tough to decide whether to repair or replace an aging unit. Some companies try to push customers to upgrade when a simple repair would do the trick. At Alljugad, we treat customers the way we would want to be treated.
                <br>
                <br>
                We would rather help you get a few more years out of an older system and win your loyalty than pressure you into buying something you don’t need. We’ll provide discounts and coupons so you can save on repairs. It’s time you found an easy solution to Plumbing
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
              <option value="1">Petlad</option>
              <!-- <button type="submit" name="p">Petlad</button> -->
              
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
$_SESSION['prof'] = "Plumbing";

                      echo  "<script>  window.location.href='response.php';</script>";
                    }
                    if($_POST['city']=='2')
                    {
                        $_SESSION['city'] = "Anand";
$_SESSION['prof'] = "Plumbing";

                        echo  "<script> window.location.href='response.php';</script>";
                    }
                    if($_POST['city']=='3')
                    {
                        $_SESSION['city'] = "Nadiad";
$_SESSION['prof'] = "Plumbing";

                        echo  "<script> window.location.href='response.php'; </script>";
                    }
                }
            }
                ?>
            <!-- <script>
                window.location.href='response.php';
            </script> -->
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
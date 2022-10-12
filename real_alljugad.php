<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alljugad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
    <link rel="stylesheet" href="alljugad.css">
    <link rel="stylesheet" href="alljugad.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
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
                    <li><a class="home" href="real_alljugad.php">Home</a> </li>
                    <li class="dropdown"><a href="#about" class="dropbtn">Services<i class="fa fa-sort-desc"></i></a>
                        <div class="dropdown-content">
                            <a href="airconditioning.php" >Air Conditioning</a>
                            <a href="plumbing.php">Plumbing</a>
                            <a href="geyser.php">Geyser</a>
                        </div>
                    </li>
                    <li class="dropdown"><a href="careers.php" class="dropbtn">Careers</a>
                        <!-- <div class="dropdown-content"> -->
                            <!-- <a href="">Technicians</a>
                            <a href="#">Office Suppport</a>
                            <a href="#">Werehouse Support</a>
                        </div> -->
                    </li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <?php
                        if(!isset($_SESSION['user']))
                        {?>
                            <li><a href="login_website.php">login</a></li>
                            <?php
                        }
                        else
                        {
                            ?>
                            <li><a href="logout.php">logou</a></li>
                            <?php
                            echo "Welcome " . $_SESSION['user'] . " To our Website..!!";
                        }
                    ?>
                </ul>
            </div>

        </nav>

    </header>

    <div class="main">
        <!-- <div class="background">
        <img src="acrepair1.webp" alt="">
    </div> -->
        <div class="appointment">
            <a href="appointment.php"><i class="fa fa-calendar"></i>
            SCHEDULE APPOINTMENT</a>
        </div>

        <div class="offer">

            <div class="line1">Schedule Online Today</div>

            <div class="line2">& Save 10% (off any service or Repair*)!</div>

            <div class="line3">Join the Comfy Club and start saving today!</div>

            <div class="saving">
                <ul>
                    <li>LIFETIMER REPAIR GUARENTEE!</li>
                    <li>20% OFF REPAIRS</li>
                    <li>1 A/C TUME-UP + 1HEATING TUNE-UP INCLUDED</li>
                    <li>2 FREE FRIENDS & FAMILY PRECISION TUNE UPS</li>
                    <li>PRIORITY SCHEDULING + NO OVERTIME OR AFTER HOURS FEES</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">Skilled Technicians Can Assist With:</h2>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <!-- <i class="fa fa-anchor " aria-hidden="true"></i> -->
                    <img src="house.png" alt="" class="house">
                    <h3 class="house">Residential HVAC
                        Services</h3>
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto obcaecati, ipsum praesentium nemo autem alias.</p> -->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <!-- <i class="fa fa-bar-chart"></i> -->
                    <img src="building.png" alt="">
                    <h3>Commercial HVAC
                        Services</h3>
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto obcaecati, ipsum praesentium nemo autem alias.</p> -->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <!-- <i class="fa fa-diamond"></i> -->
                    <img src="fan1.jpg" alt="">
                    <h3>AC Repairs, Installations
                        & Maintenance</h3>
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto obcaecati, ipsum praesentium nemo autem alias.</p> -->
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <!-- <i class="fa fa-anchor " aria-hidden="true"></i> -->
                    <img src="fire.png" alt="" class="fire">
                    <h3 class="fire">Heating Installations,
                        Repairs & Maintenance
                    </h3>
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto obcaecati, ipsum praesentium nemo autem alias.</p> -->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <!-- <i class="fa fa-bar-chart"></i> -->
                    <img src="air.png" alt="">
                    <h3>Indoor Air Quality
                        Solutions
                    </h3>
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto obcaecati, ipsum praesentium nemo autem alias.</p> -->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <!-- <i class="fa fa-diamond"></i> -->
                    <img src="thrmo.png" alt="">
                    <h3>Thermostats
                    </h3>
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto obcaecati, ipsum praesentium nemo autem alias.</p> -->
                </div>
            </div>
        </div>
    </div>


    <div class="location">
        <div class="cararea">
            <div class="service">
                <h3>Proudly Serving
                    Clients In:</h3>
                <div class="area">
                    <div class="area1">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Changa</li>
                            <li><i class="fa fa-map-marker"></i>Petlad</li>
                            <li><i class="fa fa-map-marker"></i>Valetva</li>
                            <li><i class="fa fa-map-marker"></i>Vadtal</li>
                            <li><i class="fa fa-map-marker"></i>Sojitra</li>
                        </ul>
                    </div>
                    <div class="area2">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Malataj</li>
                            <li><i class="fa fa-map-marker"></i>Anand</li>
                            <li><i class="fa fa-map-marker"></i>Nadiad</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="car">
                <img src="car2.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="mainmap">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.458231605829!2d72.81827801488267!3d22.59935748516907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e50c43cdea6c7%3A0x5074fe9e0c1c8bd!2sCharotar%20University%20of%20Science%20and%20Technology%20(CHARUSAT)!5e0!3m2!1sen!2sin!4v1662239374893!5m2!1sen!2sin"
                width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div id="aboutus" class="aboutus">
        <div class="content">
            <div class="head1">About Alljugad</div>
            <div class="info1">Keeping you comfortable with expert heating and cooling knowledge in Arizona with a
                combined experience of 5 years in the field. We service Anand and surrounding cities by providing
                excellent technical service and customer satisfaction at each job we arrive at. Educating the customer
                is key in our business so that you the home owner know what is going on with your home and have the best
                options for YOU moving forward. We thrive on helping YOU, and not by commission technicians giving you a
                sales pitch which gives our industry a bad reputation. So come join our team, and let’s start moving
                forward together!</div>

            <div class="head2">Why Choose Us</div>
            <div class="info2">From air conditioning repairs to complete system replacements, All jugad is your neighborhood’s trusted HVAC company. With 5 years of combined experience, we’ve proudly served families across the Anand Metro area. You’re guaranteed our best service because we hold our team to higher standards, including industry-leading warranties and ongoing training for every one of our technicians.</div>
        </div>
    </div>
                                 <!------------------ reviews ----------------------------------------------------- -->
                                  <!-- ---------------reviews ------------------------------------------------------ -->
    <div class="testimonials">   
        <div class="inner">
            <h1>What Our Customers Are Saying</h1>
            <!-- <div class="border"></div> -->

            <div class="row">
                <div class="col">
                    <div class="testimonial">
                        <div class="name">Dhaval Patel</div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <p>
                            Alljugad is my go to company for AC preventative maintenance and service. Luckily James has been at my home over the past 2 years and always does an excellent job for us. Making an appointment is easy, fast and timely. 
                        </p>

                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <div class="name">Krish Kanani</div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <p>
                           Best services
                        </p>

                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <div class="name">Dhrumil Tarsadiya</div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, minus reiciendis fugiat earum porro enim provident error veniam doloribus ea.
                        </p>

                    </div>
                </div>
            </div>
        </div>
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
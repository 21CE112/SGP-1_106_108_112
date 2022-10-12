<?php
// if($_SERVER["REQUEST_METHOD"]=="POST"){
// $server="localhost";
// $username="root";
// $password="";
// $database="careers";

// $conn=mysqli_connect($server,$username,$password,$database);

// // echo("heheheheheh");
//  if(!$conn)
// {
//   echo("ERROR");
// } 
// // else{
// //   echo("connect");
// // }

// $fname=$_POST["fname"];
// $lname=$_POST["lname"];
// $Email=$_POST["E-mail"];

// $password=$_POST["password"];
// $add=$_POST["add"];
// $phone=$_POST["phone"];
// $dposition=$_POST["dposition"];
// $dsalary=$_POST["dsalary"];

// $fcompany=$_POST["fcompany"];
// $fposition=$_POST["fposition"];
// $fsdate=$_POST["fsdate"];
// $fedate=$_POST["fedate"];
// $scompany=$_POST["scompany"];
// $spotion=$_POST["sposition"];
// $ssdate=$_POST["ssdate"];
// $sedate=$_POST["sedate"];
// $tcompany=$_POST["tcompany"];
// $tposition=$_POST["tposition"];
// $tsdate=$_POST["tsdate"];
// $tedate=$_POST["tedate"];


// // $sql="INSERT INTO `contact` (`Sr.no`, `name`, `E-mail`, `message`) VALUES (NULL, '$name', '$email', '$message');";
// $sql="INSERT INTO `careers` (`Sr.no`, `First Name`, `Last Name`, `Email`, `Password`, `Address`, `Phone`, `Desired Position`, `Desired salary`, `First Company Name`, `position`, `FS Date`, `FE Date`, `Second Company Name`, `S Position`, `SS Date`, `SE Date`, `Third Company Name`, `T Position`, `TS Date`, `TE Date`) VALUES (NULL, '$fname', '$lname', '$Email', '$password', '$add', '$phone', '$dposition', '$dsalary', '$fcompany', '$fposition', '$fsdate', '$fedate', '$scompany', '$spotion', '$ssdate', '$sedate', '$tcompany', '$tposition', '$tsdate', '$tedate');";

// $result=mysqli_query($conn, $sql);
// if(!$result)
// {
//   echo("ERROR");
// }
// }
require 'database_connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="careers.css">
    <title>Careers</title>
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
                            <a href="Plumbing.php">Plumbing</a>
                            <a href="geyser.php">Geyser</a>
                        </div>
                    </li>
                    <li class="dropdown"><a href="career.php" class="dropbtn">Careers</a>
                        <!-- <i class="fa fa-caret-down"></i> -->
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
            Are you a rockstar installer or technician ready to make the jump to the big leagues? Do you have what it
            takes to be a lead guy but have been stuck as a helper for years? Are you tired of installing or servicing
            low end equipment? Join Alljugad Team!
            <br>
            <br>
            Alljugad is always looking for hard working, motivated, and qualified HVAC installers and technicians to
            join our growing team! We have a dedicated install department led by a manager with 20 years experience
            installing right here in Anand. That means that we understand how difficult the job is and we’re always
            looking out for our guys. You’re not just a number at Alljugad. Our Service Department is filled with top
            notch, highly qualified and trained professionals. We are constantly continuing our education to be the most
            knowledgeable company in the valley when it comes to high end equipment.
            <br><br>
            If you do not take pride in doing nice clean installs that pass inspection on the first try, or doing
            service work so clean that you want to take pictures of what you did to brag to your friends, or if you
            don’t like to work hard and make money, this is not the place for you.
        </div>
        <div class="info2">
            Must have:
            <div class="must">
                <ul>
                    <li>Ability To Pass A Drug Screening</li>
                    <li>A Professional Appearance</li>
                    <li>Great Customer Service Skills</li>
                    <li>The Ability To Work On Your Own</li>
                    <li>Legible Handwriting And Be Computer Literate</li>
                    <li>Universal EPA Certification</li>
                    <li>A Clean Background</li>
                </ul>
            </div>
        </div>
        <div class="info3">
            We offer top pay, insurance, paid holidays, and paid vacations. Vehicle and uniforms are provided.
            Advancement opportunities for the right candidates. This is a great opportunity for the right person. We
            provide a great work environment where the field guys are the priority.
        </div>
    </div>
    <div class="careers1">
        <div class="careers">
            <div class="Employment">
                <div class="first">Employment</div>
                <form action="careers.php" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="inputName">First Name</label>
                            <input type="text" class="form-control" placeholder="First name" required name="fname">
                        </div>
                        <div class="col">
                            <label for="inputEmail4">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last name"  required name="lname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" required placeholder="Email"  name="email">
                        </div>
                        <div class="form-group col">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" required placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Address" required  name="add">
                    </div>
                    <div class="row">
                    <div class="col">
                            <label for="inputName">city</label>
                            <input type="text" class="form-control" placeholder="city" required name="city">
                        </div>
                        <div class="col">
                            <label for="inputEmail4">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number"  required name="number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="inputposition">Profession</label>
                            <input type="text" class="form-control" placeholder="" required name="dposition">
                        </div>
                        <div class="col">
                            <label for="inputsalary">Desired Salary</label>
                            <input type="text" class="form-control" placeholder="" required name="dsalary">
                        </div>
                    </div>
                
            </div>

            <div class="experience">
                <div class="second">Experience</div>
                <div class="extra">Please list the last positions you held.</div>

                <!-- <form action="" method="post"> -->
                    <div class="row">
                        <div class="col">
                            <label for="inputposition">Company Name</label>
                            <input type="text" class="form-control" placeholder="" name="fcompany">
                        </div>
                        <div class="col">
                            <label for="inputsalary">Experience</label>
                            <input type="text" class="form-control" placeholder="" name="fposition">
                        </div>
                    </div>
                   
            <!-- <label for="">submit</label> -->
            <div class="col">
            <button type="submit" name="submit" class="col" value="Submit">Register</button>
            </div>
        </div>
    </div>
    <?php
 
    if($_SERVER['REQUEST_METHOD']="POST")
    {
      if(isset($_POST['submit']))
      {
        $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $Email = $_POST['email'];
        $pass = $_POST['password'];
        $Add = $_POST['add'];
        $ct = $_POST['city'];
        $Pn = $_POST['number'];
        $prof = $_POST['dposition'];
        $sal = $_POST['dsalary'];
        $company = $_POST['fcompany'];
        $Exp = $_POST['fposition'];
       // $ms = $_POST['message'];
        $q = "INSERT INTO `careers`(`First Name`,`Last Name`,`Email`,`Password`,`Address`,`city`,`Phone`,`Profession`,`Desired salary`,`First Company Name`,`Experiance`) VALUES ('$fn','$ln','$Email','$pass','$Add','$ct','$Pn','$prof','$sal','$company','$Exp')";
        $res = mysqli_query($conn,$q);
      }
    }
?>
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
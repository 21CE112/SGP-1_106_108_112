<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    font-family: 'Playfair Display', serif;
    box-sizing: border-box;
    text-transform: capitalize;
    text-decoration: none;
    margin: 0;
    padding: 0;
}
.header{
    background-color:#472D2D;
    height: 68px;
    /* position: relative; */
    position:sticky;
    padding-top: 1px;
}
.navbar{
    padding-right: 50px;
    display: flex;
    justify-content: space-between;
    /* margin-top: 100px; */
    /* background-color: aqua; */
}
.logo{
    width: 170px;
    height: 80px;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 33px;
    /* padding: 15px; */
    float: left;
    color: #FFD8A9;
    padding-left: 130px;
    padding-top: 30px;
}
.logo span{
    font-size: 47px!important;
}
.navbar ul{
    width: 730px;
    float: right;
    padding: 0;
    line-height: 50px;
    list-style: none;
}
.navbar li{
    display: inline-block;
   
    text-align: center;
    /* color:#CC704B; */
    margin: 0;
}
.nav-sider .class:active{
    background-color: #9FC088;
    color: black;
}

.header li a{
    color:#9FC088;
    padding: 20px;
    
    font-size:20px;
    align-items: center;
    /* margin-bottom: 10; */
    text-decoration: none;
}
header li a:hover, .dropdown:hover .dropbtn {
    background-color:#9FC088;
    color: black;
  }

.dropdown-content{
    display: none;
    position: absolute;
    /* background-color:rgb(243, 238, 238); */
    background-color: lightgray;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black!important;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

.dropdown:hover .dropdown-content {
    display: block;
    width: 220px;
  }

.nav-sider .dropdown-content a:hover{
    background-color:#472D2D;
    color: #9fc088 !important;;
}

.nav-sider a:hover{
    background-color:#9FC088 ;
    color:black;
}

.nav-sider a i{
font-size: 20px;
padding-top: -10px;
padding-left: 5px;
}
           /* --------------------------info ----------------------------------------*/

.info{
    padding: 100px;
    padding-top: 50px;
    background-color: lightgray;
    padding-bottom: 50px;
}
.info h2{
    padding: 20px;
    padding-left: 0;
    font-size: 30px;
    color: #557341;
}
.info .text1,.text2,.text3,.text4{
    font-size: 18px;
}
.info .info2,.info3,.info4{
    padding-top: 45px;
}

.info3 .problems{
    padding-left: 20px;
    padding-top: 20px;
}
/* -----------------------------------city ----------------------------------------*/
.city{
    display: flex;
    justify-content: space-around;
    padding-left:  160px;    
    padding: 40px;
    background-color: lightgray;
}
.workerinfo{
    font-size: 25px;
    color: #557341;
}
form{
    font-size: larger;
}
/* ------------------------------------------footer------------------------------------ */

.logoicon{
    display: flex;
    justify-content: space-around;
    padding: 50px;
}


.footer{
    background-color:#472D2D;
}
.Logo{
    font-size: 50px;
    margin-right: 450px;
   color: #fff;
}

.social-links a{
    font-size: 28px;
    display: inline-block;
    background-color: #472D2D;
    border-radius: 50%;
    height: 45px;
    width: 45px;
    text-align: center;
    color: #fff;
}

.social-links a:hover{
   color: #472D2D;
    background-color: #704F4F;
}

.social-links{
    /* margin-top: 10px; */
    padding-top: 20px;
}

.Row{
    display: flex;
   justify-content: space-around;
   padding-bottom: 50px;
}

.footer-col h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    background-image: linear-gradient(to right, #fff 0%, #fff 100%);
    font-weight: 600;
    position: relative;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
}

.footer-col h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-image: linear-gradient(to left,#472d2d 0%, #704F4F 100%);
    height: 2px;
    box-sizing: border-box;
    width: 90px;
}

.footer ul {
    list-style: none;
    text-align: left;
    padding-left: 0;
    
}

.footer li a{
    text-decoration: none;
    color:#E6B325;
}

.footer-col ul li a:hover {
    font-weight: 600;
    color:#9FC088;
    padding-top: 8px;
}

.lastfooter .copyright{
    text-align: center;
    background-color: #472D2D;
    color: #fff;
    padding-top: 20px;
}
    </style>
</head>
<body cz-shortcut-listen="true">
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
                            <a href="airconditioning.php">Air Conditioning</a>
                            <a href="plumbing.php">Plumbing</a>
                            <a href="geyser.php">Geyser</a>
                        </div>
                    </li>
                    <!-- <li class="dropdown"><a href="#workers" class="dropbtn">Careers<i class="fa fa-sort-desc"></i></a> -->
                    <li class="dropdown"><a href="careers.php" class="dropbtn">Careers</a>
                    </li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#footer">Contact Us</a></li>
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
    <table class="table">
  <thead>
    <tr>
      <th>no</th>
      <th>Name</th>
      <th>Address</th>
      <th>Contact Number</th>
      <th>City</th>
      <th>Per Visit Charges</th>
      <th>Experience</th>


    </tr>
  </thead>
  <tbody>
<?php
            require 'database_connect.php';
            $city = $_SESSION['city'];
            $prof = $_SESSION['prof'];
            $q = "SELECT * FROM `careers` WHERE `city`='$city' AND `Profession`='$prof'";
            $res = mysqli_query($conn,$q);
            $n = mysqli_num_rows($res);
            if($n)
            {
                $c = 0;
                while($c!=$n)
                {
                    $obj = mysqli_fetch_assoc($res);
                    ?>
                    <tr>
                    <td><?php echo $c+1  ?></td>
                    <td><?php  echo $obj['First Name'] ." ".$obj['Last Name']?></td>
                    <td><?php  echo $obj['Address'] ?></td>
                    <td><?php  echo $obj['Phone'] ?></td>
                    <td><?php  echo $obj['city'] ?></td>
                    <td><?php  echo $obj['Desired salary'] ?></td>
                    <td><?php  echo $obj['Experiance'] ?></td>
    </tr>
    <?php
                    $c=$c+1;
                }
            }
            // echo $prof;
?>
      </tbody>
</table>
</body>
</html>
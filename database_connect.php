<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "careers";

    $conn = mysqli_connect($servername,$username,$pass,$database);

    if(!$conn)
    {
        die("Cannot connect to the Server..!!");
    }
    // else
    // {
    //     echo "Successfull";
    // }
    ?>
<?php
session_start();
session_unset();
session_destroy();

// echo "logged out";
echo header("location:real_alljugad.php");
?>
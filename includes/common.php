<?php
    $con = mysqli_connect("localhost", "root", "", "vinterns")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>

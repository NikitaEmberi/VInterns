<?php
require("../includes/common.php");

$username=$_POST['username'];
$username=mysqli_real_escape_string($con, $username);
$password=$_POST['password'];
$password=mysqli_real_escape_string($con, $password);

if($username=="admin" && $password=="admin@123"){
    header('location: branch-select.php'); 
}else{
    echo "<script>alert('Enter Correct Username and Password Combination')</script>";
    echo "(<script>location.href='admin-login.php'</script>)";  
}
?>

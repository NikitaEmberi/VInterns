<?php
require("../includes/common.php");

$username=$_POST['username'];
$username=mysqli_real_escape_string($con, $username);
$password=$_POST['password'];
$password=mysqli_real_escape_string($con, $password);

$query="SELECT rollNo,username,password from students where username='".$username."' AND password='".$password."'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$num=mysqli_num_rows($result);


if($num==0){
    $error = $_GET['error'];
  $error = "<span class='red'>Enter Correct Username and Password Combination</span>";
  echo "<script>alert('Enter Correct Username and Password Combination')</script>";
  echo "(<script>location.href='student-login.php'</script>)";
}else{
    $row = mysqli_fetch_array($result);
    $rollNo= $row['rollNo'];
    $_SESSION['rollNo']=$rollNo;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    // echo "success";
    $query1="SELECT student_id from skills where student_id='$rollNo'";
    $result1=mysqli_query($con,$query1) or die(mysqli_error($con));
    $row1 = mysqli_fetch_array($result1);
    $num1=mysqli_num_rows($result1);
    if($num1==0){

    header('location: skills.php'); 
   }else{
      header('location: student-side-resume.php');  
    } 
}
?>
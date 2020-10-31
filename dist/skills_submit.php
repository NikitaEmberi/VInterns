<?php
require("../includes/common.php");
$cgpa=$_POST['cgpa'];

$achievement_01=$_POST['achievement_01'];
$achievement_01=mysqli_real_escape_string($con,$achievement_01);
$achievement_02=$_POST['achievement_02'];
$achievement_02=mysqli_real_escape_string($con,$achievement_02);
$achievement_03=$_POST['achievement_03'];
$achievement_03=mysqli_real_escape_string($con,$achievement_03);

$num_of_internships=$_POST['num_of_internships'];
$num_of_internships=mysqli_real_escape_string($con,$num_of_internships);

$num_of_courses=$_POST['num_of_courses'];
$num_of_courses=mysqli_real_escape_string($con,$num_of_courses);

$username=$_SESSION['username'];
$password=$_SESSION['password'];

$query="SELECT rollNo from students where username='".$username."' and password='".$password."'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$rollNo=$_SESSION['rollNo'];

$query1="UPDATE students set cgpa='$cgpa',num_of_internships='$num_of_internships',num_of_courses='$num_of_courses',updated_at=CURRENT_TIMESTAMP where rollNo='$rollNo'";
$query2="INSERT INTO skills(Achievement_01,Achievement_02,Achievement_03,student_id) values ('$achievement_01','$achievement_02','$achievement_03','$rollNo')";

if(mysqli_query($con,$query1) && mysqli_query($con,$query2)){
    header('location: internship-details.php');   
}else{
    echo "<script>alert('Something went wrong! Please try again later.')</script>";
    echo "(<script>location.href='skills.php'</script>)";
  }

?>
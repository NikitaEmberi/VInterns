<?php
  require("../includes/common.php");
 
  $rollNo=$_SESSION['rollNo'];
  
 
  $skills_learnt=$_POST['skills_learnt'];

$c2=count($_POST['skills_learnt']);
for($i=0;$i<$c2;$i++){
    $query3="INSERT INTO skills_learnt(skills,student_id) values ('$skills_learnt[$i]','$rollNo')";
    if(mysqli_query($con,$query3)){
        header('location: student-side-resume.php');   
    }else{
        echo "<script>alert('Something went wrong! Please try again later.')</script>";
        echo "(<script>location.add_skills.php'</script>)";
    }
}



?>
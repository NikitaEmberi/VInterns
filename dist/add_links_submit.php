<?php
  require("../includes/common.php");

  $rollNo=$_SESSION['rollNo'];

  $link=$_POST['link'];
  $link=mysqli_real_escape_string($con,$link);

$query2="INSERT INTO project_links(link,student_id) values ('$link','$rollNo')";
$query21="UPDATE students set updated_at=CURRENT_TIMESTAMP where rollNo='$rollNo'";

if(mysqli_query($con,$query2) && mysqli_query($con,$query21)){
    header('location: student-side-resume.php'); 
}else{
    echo "<script>alert('Something went wrong! Please try again later!')</script>";
    echo "(<script>location.href='add_links.php'</script>)";
  }

?>
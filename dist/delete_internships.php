<?php
  require("../includes/common.php");

  $id=$_GET['id'];
  $rollNo=$_SESSION['rollNo'];
  $query22="select count(num_of_courses) from students where rollNo='$rollNo'";
  $result22=mysqli_query($con,$query22) or die($mysqli_error($con));
  $row22=mysqli_fetch_array($result22);
  $c=$row22["count(num_of_courses"];
  $c=$c-1;  


  $query21="UPDATE students set num_of_internships='$c',updated_at=CURRENT_TIMESTAMP where rollNo='$rollNo'";
  $query="DELETE from internships where id=$id";
  if(mysqli_query($con,$query) && mysqli_query($con,$query21)){
    echo "(<script>location.href='student-side-resume.php?id=$id'</script>)";
}else{
    echo "<script>alert('Something went wrong! Please try again later')</script>";
    echo "(<script>location.href='student-side-resume.php?id=$id'</script>)";              
}
?>
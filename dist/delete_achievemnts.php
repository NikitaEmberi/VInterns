<?php
  require("../includes/common.php");
  $rollNo=$_SESSION['rollNo'];

  $id=$_GET['id'];
  $query21="UPDATE students set updated_at=CURRENT_TIMESTAMP where rollNo='$rollNo'";


  $query="DELETE from skills where id=$id";
  if(mysqli_query($con,$query) && mysqli_query($con,$query21)){
    echo "(<script>location.href='student-side-resume.php?id=$id'</script>)";
}else{
    echo "<script>alert('Something went wrong! Please try again later')</script>";
    echo "(<script>location.href='student-side-resume.php?id=$id'</script>)";              
}
?>
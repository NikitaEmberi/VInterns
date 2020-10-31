<?php
  require("../includes/common.php");
 
  $rollNo=$_SESSION['rollNo'];

$query22="select count(num_of_internships) from students where rollNo='$rollNo'";
$result22=mysqli_query($con,$query22) or die($mysqli_error($con));
$row22=mysqli_fetch_array($result22);
$c=$row22["count(num_of_internships"];

  
  function GetImageExtension($imagetype){
    if(empty($imagetype)) return false;
    switch($imagetype){
        case 'image/bmp' : return '.bmp';
        case 'image/gif' : return '.gif';
        case 'image/jpg' : return '.jpg';
        case 'image/jpeg': return '.jpeg';
        case 'image/png' : return '.png';
        // case 'image/pdf' : return '.pdf';
        default: return false;
    }
}
      $organization=$_POST['organization'];
      $organization=mysqli_real_escape_string($con,$organization);

      $start=$_POST['start'];
      $start=mysqli_real_escape_string($con,$start);

      $end=$_POST['end'];
      $end=mysqli_real_escape_string($con,$end);

      $description=$_POST['description'];
      $description=mysqli_real_escape_string($con,$description);
      
      $choose=$_POST['choose'];
      $choose=mysqli_real_escape_string($con,$choose);

      $choose1=$_POST['choose1'];
      $choose1=mysqli_real_escape_string($con,$choose1);


      
      $uploadedimage=$_FILES['uploadedimage']['name'];
      
      if(!empty($_FILES["uploadedimage"]["name"])){
        $file_name=$_FILES["uploadedimage"]["name"];
        $tmp_name=$_FILES["uploadedimage"]["tmp_name"];
        $imgtype=$_FILES["uploadedimage"]["type"];
        $ext=GetImageExtension($imgtype);
        $imagename=date("d-m-y")."-".time().$ext;
        $target_path="../images/".$imagename;
        if(move_uploaded_file($tmp_name,$target_path)){
            if($ext==false){ 
                echo "<script>alert('Please upload a valid file type')</script>";
                echo "(<script>location.href='student-side-resume.php'</script>)";
            }else{
                $c=$c+1;
               $query1="INSERT INTO internships(organization,description,start,end,year,letter,skills_learnt,student_id) values ('$organization','$description','$start','$end','$choose','$imagename','$choose1','$rollNo')";
               $query21="UPDATE students set num_of_internships=$c,updated_at=CURRENT_TIMESTAMP where rollNo='$rollNo'";
               if(mysqli_query($con,$query1) && mysqli_query($con,$query21)){
                header('location: student-side-resume.php');   
            }else{
                echo "<script>alert('Something went wrong! Please try again later.')</script>";
                echo "(<script>location.add_internships.php'</script>)";
                }
            }
        }
    }
      


?>
<?php
  require("../includes/common.php");
 
  $rollNo=$_SESSION['rollNo'];

  $query="SELECT num_of_internships from students where rollNo='$rollNo'";
  $result=mysqli_query($con,$query) or die($mysqli_error($con));
  $row=mysqli_fetch_array($result);
  $c=$row["num_of_internships"];
  
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
for($i=0;$i<$c;$i++){
      $organization=$_POST['organization'][$i];
      $organization=mysqli_real_escape_string($con,$organization);

      $start=$_POST['start'][$i];
      $start=mysqli_real_escape_string($con,$start);

      $end=$_POST['end'][$i];
      $end=mysqli_real_escape_string($con,$end);

      $description=$_POST['description'][$i];
      $description=mysqli_real_escape_string($con,$description);
      
      $choose=$_POST['choose'][$i];
      $choose=mysqli_real_escape_string($con,$choose);

      $choose1=$_POST['choose1'][$i];
      $choose1=mysqli_real_escape_string($con,$choose1);


    //   $skills=$_POST['skills'][$i];
    //   echo $skills;
    //   echo $i;
    
      
      $uploadedimage=$_FILES['uploadedimage']['name'][$i];
      
      if(!empty($_FILES["uploadedimage"]["name"])){
        $file_name=$_FILES["uploadedimage"]["name"][$i];
        $tmp_name=$_FILES["uploadedimage"]["tmp_name"][$i];
        $imgtype=$_FILES["uploadedimage"]["type"][$i];
        $ext=GetImageExtension($imgtype);
        $imagename=date("d-m-y")."-".time().$ext;
        $target_path="../images/".$imagename;
        if(move_uploaded_file($tmp_name,$target_path)){
            if($ext==false){ 
                echo "<script>alert('Please upload a valid file type')</script>";
                echo "(<script>location.href='internship-details.php'</script>)";
            }else{
               $query1="INSERT INTO internships(organization,description,start,end,year,letter,skills_learnt,student_id) values ('$organization','$description','$start','$end','$choose','$imagename','$choose1','$rollNo')";
               if(mysqli_query($con,$query1)){
                header('location: resume.php');   
            }else{
                echo "<script>alert('Something went wrong! Please try again later.')</script>";
                echo "(<script>location.href='internship-details.php'</script>)";
                }
            }
        }
    }
      
  }


?>